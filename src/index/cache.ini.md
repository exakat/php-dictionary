# Cache
Cache, or caching, is a technique used to store and reuse the results of expensive operations to improve performance.

There are different types of caches, depending on where they are applied: opcode cache, data cache, query cache, etc.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/cache.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/cache.ini.html","name":"Cache","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:16:19 +0000","dateModified":"Tue, 14 Jul 2026 06:16:19 +0000","description":"Cache, or caching, is a technique used to store and reuse the results of expensive operations to improve performance","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Cache.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $count = count($array);
    // $count is a cache for the number of elements in the array
    // it saves a call to count() for every loop

    for($i = 0; $i < $count; ++$i) {
        doSomething($i);
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Cache_(computing))**
## See Also

+ [PHP cache](https://www.php-cache.com/en/latest/)

## Related

+ [Memoization](memoization.ini.html)
+ [Hoisting](hoisting.ini.html)
+ [Horizontal Scaling](horizontal-scaling.ini.html)
+ [Search Engine](search-engine.ini.html)
+ [Search Engine Optimization (SEO)](seo.ini.html)
+ [Serialization](serialization.ini.html)
+ [var\_export()](var_export.ini.html)
+ [Determinism](determinism.ini.html)
+ [Load Balancer](load-balancer.ini.html)
+ [Deduplication](deduplication.ini.html)
+ [Fingerprint](fingerprint.ini.html)
+ [Latency](latency.ini.html)
+ [Rate Limiting](rate-limit.ini.html)
+ [Replay](replay.ini.html)
+ [Time To Live (TTL)](ttl.ini.html)
+ [Cache Stampede](cache-stampede.ini.html)
+ [CDN](cdn.ini.html)
+ [Eventual Consistency](eventual-consistency.ini.html)
+ [Shared Memory](shared-memory.ini.html)
+ [Temporary](temporary.ini.html)
