.. _cache-stampede:
.. _thundering-herd:
.. _dog-piling:
.. meta::
	:description:
		Cache Stampede: A cache stampede, also known as thundering herd or dog-piling, is a failure mode that occurs when many concurrent requests simultaneously discover that a cached value has expired or is missing.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cache Stampede
	:twitter:description: Cache Stampede: A cache stampede, also known as thundering herd or dog-piling, is a failure mode that occurs when many concurrent requests simultaneously discover that a cached value has expired or is missing
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Cache Stampede
	:og:type: article
	:og:description: A cache stampede, also known as thundering herd or dog-piling, is a failure mode that occurs when many concurrent requests simultaneously discover that a cached value has expired or is missing
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/cache-stampede.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Cache Stampede","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 01 Jul 2026 09:59:41 +0000","dateModified":"Wed, 01 Jul 2026 09:59:41 +0000","description":"A cache stampede, also known as thundering herd or dog-piling, is a failure mode that occurs when many concurrent requests simultaneously discover that a cached value has expired or is missing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Cache Stampede.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Cache Stampede
--------------

A cache stampede, also known as thundering herd or dog-piling, is a failure mode that occurs when many concurrent requests simultaneously discover that a cached value has expired or is missing. All requests then attempt to regenerate the cache at the same time, flooding the backend  with redundant work. This is especially destructive under high traffic because the backend, already under load, receives a sudden spike just when it is needed most.

Common mitigation strategies include: locking, where only one process regenerates the cache while others wait or serve stale data, probabilistic early expiration, where the cache refreshes slightly before it expires, based on a probability, and background revalidation, which returns stale data immediately while refreshing asynchronously.

.. code-block:: php
   
   <?php
   
   // Naive approach — prone to cache stampede
   $value = $cache->get('key');
   if ($value === null) {
       // All concurrent requests reach here simultaneously on expiry
       $value = expensiveComputation();
       $cache->set('key', $value, ttl: 60);
   }
   
   // Lock-based mitigation
   $value = $cache->get('key');
   if ($value === null) {
       $lock = $cache->lock('key:lock', ttl: 5);
       if ($lock->get()) {
           try {
               $value = expensiveComputation();
               $cache->set('key', $value, ttl: 60);
           } finally {
               $lock->release();
           }
       } else {
           // Wait for the lock holder to populate the cache
           $lock->block(4);
           $value = $cache->get('key');
       }
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Cache_stampede>`__

See also `Laravel Cache Locks <https://laravel.com/docs/cache#atomic-locks>`_ and `XFetch: optimal probabilistic cache stampede prevention <https://cseweb.ucsd.edu/~avattani/papers/cache_stampede.pdf>`_.

Related : :ref:`Cache <cache>`, :ref:`Time To Live (TTL) <ttl>`, :ref:`Race Condition <race-condition>`, :ref:`Mutex <mutex>`, :ref:`Lock <lock>`, :ref:`Concurrency <concurrency>`, :ref:`Rate Limiting <rate-limit>`, :ref:`Availability <availability>`, :ref:`Reliability <reliability>`

Related packages : `symfony/lock <https://packagist.org/packages/symfony/lock>`_, `malkusch/lock <https://packagist.org/packages/malkusch/lock>`_, `php-cache/stampede-protection <https://packagist.org/packages/php-cache/stampede-protection>`_, `symfony/cache <https://packagist.org/packages/symfony/cache>`_, `ronnylt/redlock-php <https://packagist.org/packages/ronnylt/redlock-php>`_
