.. _cache:
.. meta::
	:description:
		Cache: Cache, or caching, is a technique used to store and reuse the results of expensive operations to improve performance.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cache
	:twitter:description: Cache: Cache, or caching, is a technique used to store and reuse the results of expensive operations to improve performance
	:twitter:creator: @exakat
	:og:title: Cache
	:og:type: article
	:og:description: Cache, or caching, is a technique used to store and reuse the results of expensive operations to improve performance
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/cache.ini.html
	:og:locale: en


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
