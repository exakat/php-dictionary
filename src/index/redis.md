# Redis
Redis is an in-memory key-value data store, used as a database, cache, message broker, or queue. It supports richer data structures than a plain key-value store, including hashes, lists, sets, sorted sets, and streams, and offers sub-millisecond latency thanks to its in-memory nature.

Redis can persist its dataset to disk, be replicated, and be clustered for high availability and horizontal scaling.

PHP applications talk to Redis mostly through the ``phpredis`` PECL C-extension, or through pure-PHP client libraries such as ``predis/predis``. Frameworks like Symfony and Laravel ship built-in cache, session, and queue adapters backed by Redis.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/redis.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/redis.html","name":"Redis","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Aug 2026 09:22:45 +0000","dateModified":"Mon, 17 Aug 2026 09:22:45 +0000","description":"Redis is an in-memory key-value data store, used as a database, cache, message broker, or queue","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/redis.html"]}],"keywords":["architecture","database"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/key-value-store.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pubsub.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sentinel.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nosql-database.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/redis.io\/docs\/latest\/develop\/clients\/php\/"},{"@type":"CreativeWork","name":"PHP and Redis Tutorial: Getting Started with PhpRedis","url":"https:\/\/redis.io\/tutorials\/develop\/php\/"},{"@type":"CreativeWork","name":"How to Use Redis with PHP using PhpRedis with Examples","url":"https:\/\/www.thegeekstuff.com\/2014\/02\/phpredis\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"redis"}]}]}</script>
```php
<?php

    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);

    $redis->set('user:42', json_encode(['name' => 'Ada']));
    $user = json_decode($redis->get('user:42'), true);

?>
```

**[Documentation](https://redis.io/docs/latest/develop/clients/php/)**
## See Also

+ [PHP and Redis Tutorial: Getting Started with PhpRedis](https://redis.io/tutorials/develop/php/)
+ [How to Use Redis with PHP using PhpRedis with Examples](https://www.thegeekstuff.com/2014/02/phpredis/)

## Related

+ [Key-value Stores](key-value-store.html)
+ [Cache](cache.html)
+ [Pub/Sub](pubsub.html)
+ [Sentinel](sentinel.html)
+ [Nosql Database](nosql-database.html)

## Related packages

+ [predis/predis](https://packagist.org/packages/predis/predis)
