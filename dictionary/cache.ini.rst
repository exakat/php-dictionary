.. _cache:
.. meta::
	:description:
		Cache: Cache, or caching, is a technique used to store and reuse the results of expensive operations to improve performance.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cache
	:twitter:description: Cache: Cache, or caching, is a technique used to store and reuse the results of expensive operations to improve performance
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Cache
	:og:type: article
	:og:description: Cache, or caching, is a technique used to store and reuse the results of expensive operations to improve performance
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/cache.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/cache.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/cache.ini.html","name":"Cache","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:16:19 +0000","dateModified":"Tue, 14 Jul 2026 06:16:19 +0000","description":"Cache, or caching, is a technique used to store and reuse the results of expensive operations to improve performance","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Cache.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Cache
-----

Cache, or caching, is a technique used to store and reuse the results of expensive operations to improve performance.

There are different types of caches, depending on where they are applied: opcode cache, data cache, query cache, etc.

.. code-block:: php
   
   <?php
   
       $count = count($array);
       // $count is a cache for the number of elements in the array
       // it saves a call to count() for every loop
   
       for($i = 0; $i < $count; ++$i) {
           doSomething($i);
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Cache_(computing)>`__

See also `PHP cache <https://www.php-cache.com/en/latest/>`_.

Related : :ref:`Memoization <memoization>`, :ref:`Hoisting <hoisting>`, :ref:`Horizontal Scaling <horizontal-scaling>`, :ref:`Search Engine <search-engine>`, :ref:`Search Engine Optimization (SEO) <seo>`, :ref:`Serialization <serialization>`, :ref:`var_export() <var_export>`, :ref:`Determinism <determinism>`, :ref:`Load Balancer <load-balancer>`, :ref:`Deduplication <deduplication>`, :ref:`Fingerprint <fingerprint>`, :ref:`Latency <latency>`, :ref:`Rate Limiting <rate-limit>`, :ref:`Replay <replay>`, :ref:`Time To Live (TTL) <ttl>`, :ref:`Cache Stampede <cache-stampede>`, :ref:`CDN <cdn>`, :ref:`Eventual Consistency <eventual-consistency>`, :ref:`Shared Memory <shared-memory>`, :ref:`Temporary <temporary>`
