.. _ttl:
.. _time-to-live:
.. _expiry:
.. meta::
	:description:
		Time To Live (TTL): Time To Live, abbreviated TTL, is a value that defines how long a piece of data remains valid before it expires and must be refreshed or discarded.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Time To Live (TTL)
	:twitter:description: Time To Live (TTL): Time To Live, abbreviated TTL, is a value that defines how long a piece of data remains valid before it expires and must be refreshed or discarded
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Time To Live (TTL)
	:og:type: article
	:og:description: Time To Live, abbreviated TTL, is a value that defines how long a piece of data remains valid before it expires and must be refreshed or discarded
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/ttl.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Time To Live (TTL)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 01 Jul 2026 10:05:24 +0000","dateModified":"Wed, 01 Jul 2026 10:05:24 +0000","description":"Time To Live, abbreviated TTL, is a value that defines how long a piece of data remains valid before it expires and must be refreshed or discarded","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Time To Live (TTL).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Time To Live (TTL)
------------------

Time To Live, abbreviated TTL, is a value that defines how long a piece of data remains valid before it expires and must be refreshed or discarded. It is expressed in seconds in most contexts.

TTL appears across many layers of a PHP application: cache entries like Redis, Memcached, APCu, etc., DNS records, HTTP cache headers such as ``Cache-Control: max-age``, JSON Web Tokens, session lifetimes, and idempotency key storage.

A short TTL reduces stale data at the cost of more frequent recomputation or re-fetching. A long TTL improves performance but risks serving outdated information.

`Documentation <https://en.wikipedia.org/wiki/Time_to_live>`__

Related : :ref:`Cache <cache>`, :ref:`Idempotent <idempotent>`, :ref:`Session <session>`, :ref:`JSON Web Token (JWT) <jwt>`, :ref:`HTTP Headers <http-header>`, :ref:`Domain Name System (DNS) <dns>`, :ref:`Memoization <memoization>`, :ref:`Cache Stampede <cache-stampede>`, :ref:`CDN <cdn>`, :ref:`Deduplication <deduplication>`, :ref:`Replay <replay>`
