.. _faas:
.. _function-as-a-service:
.. meta::
	:description:
		Function-as-a-Service (FaaS): Function-as-a-Service, or FaaS, is a serverless execution model where individual functions are deployed, invoked on demand, and billed per execution.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Function-as-a-Service (FaaS)
	:twitter:description: Function-as-a-Service (FaaS): Function-as-a-Service, or FaaS, is a serverless execution model where individual functions are deployed, invoked on demand, and billed per execution
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Function-as-a-Service (FaaS)
	:og:type: article
	:og:description: Function-as-a-Service, or FaaS, is a serverless execution model where individual functions are deployed, invoked on demand, and billed per execution
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/faas.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/faas.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/faas.ini.html","name":"Function-as-a-Service (FaaS)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 04 Jul 2026 08:16:17 +0000","dateModified":"Sat, 04 Jul 2026 08:16:17 +0000","description":"Function-as-a-Service, or FaaS, is a serverless execution model where individual functions are deployed, invoked on demand, and billed per execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Function-as-a-Service (FaaS).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Function-as-a-Service (FaaS)
----------------------------

Function-as-a-Service, or FaaS, is a serverless execution model where individual functions are deployed, invoked on demand, and billed per execution. The cloud provider manages all infrastructure: provisioning, scaling, and teardown.

Each function is stateless, short-lived, and triggered by an event (HTTP request, queue message, scheduled cron, S3 upload). The provider scales instances automatically from zero to thousands.

PHP runs on FaaS platforms through runtime layers. The most common approach is Bref, a PHP Lambda layer for AWS Lambda that handles bootstrapping the PHP runtime, forwarding events, and returning responses. Similar support exists for Google Cloud Functions and Azure Functions.

The main drawback of FaaS for PHP is cold start latency: the first invocation after an idle period must initialise the container and PHP runtime before executing. Subsequent invocations reuse the warm container and are fast.

.. code-block:: php
   
   <?php
   
   // AWS Lambda handler via Bref (https://bref.sh)
   // File: index.php
   
   use Bref\Context\Context;
   
   return function (array $event, Context $context): string {
       $name = $event['name'] ?? 'world';
       return 'Hello, ' . $name . '!';
   };
   
   // template.yaml (SAM):
   // Resources:
   //   HelloFunction:
   //     Type: AWS::Serverless::Function
   //     Properties:
   //       FunctionName: hello
   //       Runtime: provided.al2
   //       Layers:
   //         - !Sub arn:aws:lambda::534081306603:layer:php-83:x
   //       Handler: index.php
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Function_as_a_service>`__

See also `Bref — PHP on AWS Lambda <https://bref.sh>`_.

Related : :ref:`Serverless <serverless>`, :ref:`Cold Start <cold-start>`, :ref:`Event Driven <event-driven>`, :ref:`Stateless <stateless>`

Related packages : `bref/bref <https://packagist.org/packages/bref/bref>`_
