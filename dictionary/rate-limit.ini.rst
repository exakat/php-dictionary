.. _rate-limit:
.. _rate-limiting:
.. _throttling:
.. meta::
	:description:
		Rate Limiting: Rate limiting is a technique that controls the frequency of requests a client can make to a service within a given time window.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Rate Limiting
	:twitter:description: Rate Limiting: Rate limiting is a technique that controls the frequency of requests a client can make to a service within a given time window
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Rate Limiting
	:og:type: article
	:og:description: Rate limiting is a technique that controls the frequency of requests a client can make to a service within a given time window
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/rate-limit.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Rate Limiting","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 11 Jun 2026 21:10:19 +0000","dateModified":"Thu, 11 Jun 2026 21:10:19 +0000","description":"Rate limiting is a technique that controls the frequency of requests a client can make to a service within a given time window","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Rate Limiting.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Rate Limiting
-------------

Rate limiting is a technique that controls the frequency of requests a client can make to a service within a given time window. It protects services from abuse, denial-of-service attacks, and resource exhaustion.

Common strategies include fixed window, sliding window, token bucket, and leaky bucket algorithms. In PHP applications, rate limiting is often implemented at the web server, reverse proxy, or application layer, using shared storage such as Redis or Memcached to track request counts across processes.

`Documentation <https://en.wikipedia.org/wiki/Rate_limiting>`__

Related : :ref:`Quality of Service (QoS) <qos>`, :ref:`Distributed Denial Of Service (DDOS) <ddos>`, :ref:`Availability <availability>`, :ref:`Performance <performance>`, :ref:`Middleware Pattern <middleware>`, :ref:`Cache <cache>`, :ref:`Security <security>`
