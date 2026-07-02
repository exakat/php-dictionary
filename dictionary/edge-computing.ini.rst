.. _edge-computing:
.. _edge:
.. _compute-at-the-edge:
.. meta::
	:description:
		Edge Computing: Edge computing is a distributed computing paradigm that processes data at or near the source: at the network edge, close to the user or device, rather than routing all computation to a centralised data centre.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Edge Computing
	:twitter:description: Edge Computing: Edge computing is a distributed computing paradigm that processes data at or near the source: at the network edge, close to the user or device, rather than routing all computation to a centralised data centre
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Edge Computing
	:og:type: article
	:og:description: Edge computing is a distributed computing paradigm that processes data at or near the source: at the network edge, close to the user or device, rather than routing all computation to a centralised data centre
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/edge-computing.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Edge Computing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 15:12:51 +0000","dateModified":"Tue, 30 Jun 2026 15:12:51 +0000","description":"Edge computing is a distributed computing paradigm that processes data at or near the source: at the network edge, close to the user or device, rather than routing all computation to a centralised data centre","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Edge Computing.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Edge Computing
--------------

Edge computing is a distributed computing paradigm that processes data at or near the source: at the network edge, close to the user or device, rather than routing all computation to a centralised data centre. The goal is to reduce latency, bandwidth consumption, and round-trip time.

In web development, the edge typically refers to CDN Points of Presence, PoPs, distributed globally. Logic executed at the edge runs within milliseconds of the end user, avoiding the latency of a transatlantic round trip to an origin server.

PHP at the edge is an emerging area. Cloudflare Workers do not natively support PHP, but experimental projects explore WebAssembly-compiled PHP. FrankenPHP supports edge-style persistent workers. AWS Lambda@Edge runs serverless functions at CloudFront PoPs, and Bref enables PHP on Lambda.

Common edge use cases: A/B testing, personalisation headers, authentication token validation, geo-routing, bot detection, and serving cached responses without hitting the origin.

.. code-block:: php
   
   <?php
   
   // PHP on the edge via AWS Lambda@Edge (using Bref)
   // Triggered at CloudFront request/response lifecycle
   
   return function (array $event): array {
       $request = $event['Records'][0]['cf']['request'];
       $headers = $request['headers'];
   
       // Geo-routing: redirect based on CloudFront-provided country header
       $country = $headers['cloudfront-viewer-country'][0]['value'] ?? 'US';
   
       if ($country === 'DE') {
           return [
               'status'      => '302',
               'statusDescription' => 'Found',
               'headers'     => [
                   'location' => [['key' => 'Location', 'value' => 'https://de.example.com' . $request['uri']]],
               ],
           ];
       }
   
       return $request; // pass through to origin
   };
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Edge_computing>`__

See also `Wikipedia: Edge computing <https://en.wikipedia.org/wiki/Edge_computing>`_.

Related : :ref:`Serverless <serverless>`, :ref:`Function-as-a-Service <faas>`, :ref:`Internet of Things (IoT) <iot>`, :ref:`Latency <latency>`, :ref:`CDN <cdn>`
