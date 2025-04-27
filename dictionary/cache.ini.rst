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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Cache","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Cache, or caching, is a technique used to store and reuse the results of expensive operations to improve performance","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Cache.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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

See also `PHP cache <https://www.php-cache.com/en/latest/>`_

Related : :ref:`Memoization <memoization>`
