.. _cold-start:
.. _cold-start-latency:
.. _cold-start-problem:
.. meta::
	:description:
		Cold Start: A cold start is the delay incurred when a serverless function or containerised service must be initialised from scratch before handling a request.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cold Start
	:twitter:description: Cold Start: A cold start is the delay incurred when a serverless function or containerised service must be initialised from scratch before handling a request
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Cold Start
	:og:type: article
	:og:description: A cold start is the delay incurred when a serverless function or containerised service must be initialised from scratch before handling a request
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/cold-start.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Cold Start","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 08:44:13 +0000","dateModified":"Fri, 03 Jul 2026 08:44:13 +0000","description":"A cold start is the delay incurred when a serverless function or containerised service must be initialised from scratch before handling a request","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Cold Start.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Cold Start
----------

A cold start is the delay incurred when a serverless function or containerised service must be initialised from scratch before handling a request. The runtime environment (container, PHP process, class autoloading) is not yet warm, so the first invocation takes significantly longer than subsequent ones.

In a FaaS environment (AWS Lambda, Google Cloud Functions), a cold start involves: provisioning a container, downloading the function package, initialising the PHP runtime, and executing any bootstrap code (framework boot, DI container compilation, autoloader initialisation). For PHP, cold starts commonly range from a few hundred milliseconds to over a second depending on framework size.

Subsequent invocations reuse the warm container and execute in milliseconds. Containers are typically kept warm for a few minutes of inactivity before being torn down.

Mitigation strategies include: provisioned concurrency (pre-warming a fixed number of instances), reducing the deployment package size and bootstrap time, using slim frameworks or no framework for latency-sensitive functions, and keeping functions warm via scheduled pings.

.. code-block:: php
   
   <?php
   
   // Bref (PHP on Lambda) — minimise cold start by avoiding heavy bootstrap
   // Bad: full Symfony kernel boot on every cold start
   $kernel = new Kernel('prod', false);
   $kernel->boot(); // loads 300+ classes, compiles DI container
   
   // Better for Lambda: pre-compiled container, minimal bootstrap
   // Or use a micro-runtime that skips the framework entirely
   return function (array $event): array {
       // Lightweight handler — only what this function needs
       $name = $event['queryStringParameters']['name'] ?? 'world';
       return [
           'statusCode' => 200,
           'body'       => json_encode(['message' => 'Hello, ' . $name . '!']),
       ];
   };
   
   // Provisioned concurrency (configured in AWS, not in PHP):
   // keeps N containers permanently warm, eliminating cold starts for baseline traffic
   
   ?>


`Documentation <https://docs.aws.amazon.com/lambda/latest/dg/lambda-concurrency.html>`__

See also `AWS Lambda: Cold starts <https://docs.aws.amazon.com/lambda/latest/dg/lambda-concurrency.html>`_ and `Bref: Cold Start <https://bref.sh/docs/environment/cold-starts>`_.

Related : :ref:`Function-as-a-Service (FaaS) <faas>`, :ref:`Serverless <serverless>`, :ref:`Latency <latency>`, :ref:`Performance <performance>`
