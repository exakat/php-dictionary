.. _apcu:
.. _apc-user-cache:
.. meta::
	:description:
		APCu: APCu, APC User Cache, is a PHP extension that provides a shared-memory, in-process key-value store for caching arbitrary data between requests, without needing an external service like Memcached or Redis.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: APCu
	:twitter:description: APCu: APCu, APC User Cache, is a PHP extension that provides a shared-memory, in-process key-value store for caching arbitrary data between requests, without needing an external service like Memcached or Redis
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: APCu
	:og:type: article
	:og:description: APCu, APC User Cache, is a PHP extension that provides a shared-memory, in-process key-value store for caching arbitrary data between requests, without needing an external service like Memcached or Redis
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/apcu.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/apcu.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/apcu.ini.html","name":"APCu","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:35:16 +0000","dateModified":"Thu, 16 Jul 2026 14:35:16 +0000","description":"APCu, APC User Cache, is a PHP extension that provides a shared-memory, in-process key-value store for caching arbitrary data between requests, without needing an external service like Memcached or Redis","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/APCu.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


APCu
----

APCu, APC User Cache, is a PHP extension that provides a shared-memory, in-process key-value store for caching arbitrary data between requests, without needing an external service like Memcached or Redis.

APCu is the successor of APC, Alternative PHP Cache, once its opcode-caching part was superseded by OPcache; only the user-cache API survived under the name APCu.

Common functions include:

+ ``apcu_store()`` to write a value, with an optional TTL, time-to-live
+ ``apcu_fetch()`` to read a value back
+ ``apcu_delete()`` to remove an entry
+ ``apcu_exists()`` to check for a key without fetching its value
+ ``apcu_inc()`` / ``apcu_dec()`` for atomic counters
+ ``apcu_clear_cache()`` to flush the whole cache

Because the cache lives in shared memory local to the PHP process pool, it is fast, but it is not shared across servers; in a multi-server, load-balanced setup, a distributed cache such as Redis or Memcached is usually preferred.

.. code-block:: php
   
   <?php
   
       if (apcu_exists('user_count')) {
           $count = apcu_fetch('user_count');
       } else {
           $count = count_users_from_database();
           apcu_store('user_count', $count, 300); // cache for 5 minutes
       }
   
       apcu_inc('page_views');
   
   ?>


`Documentation <https://www.php.net/manual/en/book.apcu.php>`__

Related : :ref:`Shared Memory <shared-memory>`, :ref:`Opcache <opcache>`, :ref:`Cache <cache>`, , , :ref:`Session <session>`
