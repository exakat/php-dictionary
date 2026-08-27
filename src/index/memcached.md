# Memcached
Memcached is a distributed, in-memory key-value store used to cache the results of database queries, API calls, or rendered fragments, so that repeated requests can be served from RAM instead of recomputing them. Unlike APCu, whose cache lives inside a single PHP process pool, Memcached runs as a separate daemon and can be shared across many web servers, making it a natural fit for load-balanced, multi-server deployments.

PHP talks to Memcached through the ``Memcached`` extension, built on ``libmemcached``, which offers a richer API, including binary protocol support and consistent hashing across a server pool, than the older, now unmaintained, ``memcache`` extension.

A ``Memcached`` instance connects to one or more servers with ``addServer()``, then stores and retrieves values with ``set()`` and ``get()``, optionally passing a TTL, time-to-live, after which the entry is evicted. Memcached has no built-in persistence: on restart or eviction under memory pressure, cached data is simply gone, so it should only ever hold data that can be recomputed.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memcached.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memcached.html","name":"Memcached","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 18 Aug 2026 05:30:14 +0000","dateModified":"Tue, 18 Aug 2026 05:30:14 +0000","description":"Memcached is a distributed, in-memory key-value store used to cache the results of database queries, API calls, or rendered fragments, so that repeated requests can be served from RAM instead of recomputing them","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memcached.html"]}],"keywords":["extension","cache"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/apcu.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/redis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/key-value-store.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shared-memory.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.memcached.php"},{"@type":"CreativeWork","name":"Memcached with PHP: Basics and Quick Tutorial","url":"https:\/\/www.dragonflydb.io\/guides\/memcached-with-php-basics-and-quick-tutorial"},{"@type":"CreativeWork","name":"Memcached in PHP","url":"https:\/\/www.geeksforgeeks.org\/system-design\/memcached-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"memcached"}]}]}</script>
```php
<?php

    $memcached = new Memcached();
    $memcached->addServer('127.0.0.1', 11211);

    $memcached->set('user:42', json_encode(['name' => 'Ada']), 300); // cache for 5 minutes

    $user = json_decode($memcached->get('user:42'), true);

?>
```

**[Documentation](https://www.php.net/manual/en/book.memcached.php)**
## See Also

+ [Memcached with PHP: Basics and Quick Tutorial](https://www.dragonflydb.io/guides/memcached-with-php-basics-and-quick-tutorial)
+ [Memcached in PHP](https://www.geeksforgeeks.org/system-design/memcached-in-php/)

## Related

+ [APCu](apcu.html)
+ [Redis](redis.html)
+ [Cache](cache.html)
+ [Key-value Stores](key-value-store.html)
+ [Shared Memory](shared-memory.html)
