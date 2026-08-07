# APCu
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
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/apcu.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/apcu.html","name":"APCu","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:35:16 +0000","dateModified":"Thu, 16 Jul 2026 14:35:16 +0000","description":"APCu, APC User Cache, is a PHP extension that provides a shared-memory, in-process key-value store for caching arbitrary data between requests, without needing an external service like Memcached or Redis","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/APCu.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"APCu"}]}]}</script>
```php
<?php

    if (apcu_exists('user_count')) {
        $count = apcu_fetch('user_count');
    } else {
        $count = count_users_from_database();
        apcu_store('user_count', $count, 300); // cache for 5 minutes
    }

    apcu_inc('page_views');

?>
```

**[Documentation](https://www.php.net/manual/en/book.apcu.php)**
## Related

+ [Shared Memory](shared-memory.html)
+ [Opcache](opcache.html)
+ [Cache](cache.html)
+ [Session](session.html)
