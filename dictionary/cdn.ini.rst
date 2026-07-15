.. _cdn:
.. _content-delivery-network:
.. meta::
	:description:
		CDN: A Content Delivery Network (CDN) is a geographically distributed network of proxy servers that delivers content to end-users from the node closest to them, reducing latency and offloading traffic from the origin server.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: CDN
	:twitter:description: CDN: A Content Delivery Network (CDN) is a geographically distributed network of proxy servers that delivers content to end-users from the node closest to them, reducing latency and offloading traffic from the origin server
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: CDN
	:og:type: article
	:og:description: A Content Delivery Network (CDN) is a geographically distributed network of proxy servers that delivers content to end-users from the node closest to them, reducing latency and offloading traffic from the origin server
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/cdn.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/cdn.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/cdn.ini.html","name":"CDN","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 15:19:34 +0000","dateModified":"Tue, 30 Jun 2026 15:19:34 +0000","description":"A Content Delivery Network (CDN) is a geographically distributed network of proxy servers that delivers content to end-users from the node closest to them, reducing latency and offloading traffic from the origin server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/CDN.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


CDN
---

A Content Delivery Network (CDN) is a geographically distributed network of proxy servers that delivers content to end-users from the node closest to them, reducing latency and offloading traffic from the origin server.

CDNs cache static assets (images, CSS, JavaScript, fonts) and serve them with appropriate HTTP headers. They can also handle dynamic content acceleration, DDoS mitigation, TLS termination, and edge-side logic.

PHP contributes by setting correct HTTP caching headers so the CDN knows what to cache, for how long, and when to revalidate.

.. code-block:: php
   
   <?php
   
   // Tell the CDN it may cache this response for 1 day; browsers for 1 hour
   header('Cache-Control: public, max-age=3600, s-maxage=86400');
   header('Vary: Accept-Encoding');
   
   // Provide an ETag so the CDN can validate without a full download
   $etag = md5_file(__DIR__ . '/asset.js');
   header('ETag: "' . $etag . '"');
   
   if (isset($_SERVER['HTTP_IF_NONE_MATCH']) && $_SERVER['HTTP_IF_NONE_MATCH'] === '"' . $etag . '"') {
       http_response_code(304);
       exit;
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Content_delivery_network>`__

See also `Content delivery network <https://en.wikipedia.org/wiki/Content_delivery_network>`_.

Related : :ref:`Cache <cache>`, :ref:`Latency <latency>`, :ref:`HTTP Headers <http-header>`, :ref:`Load Balancer <load-balancer>`, :ref:`Edge Computing <edge-computing>`, :ref:`Horizontal Scaling <horizontal-scaling>`, :ref:`Time To Live (TTL) <ttl>`
