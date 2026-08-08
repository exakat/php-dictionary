# Cache
Cache, or caching, is a technique used to store and reuse the results of expensive operations to improve performance.

There are different types of caches, depending on where they are applied: opcode cache, data cache, query cache, etc.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache.html","name":"Cache","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:16:19 +0000","dateModified":"Tue, 14 Jul 2026 06:16:19 +0000","description":"Cache, or caching, is a technique used to store and reuse the results of expensive operations to improve performance","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Cache.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Cache"}]}]}</script>
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

+ [Memoization](memoization.html)
+ [Hoisting](hoisting.html)
+ [Horizontal Scaling](horizontal-scaling.html)
+ [Search Engine](search-engine.html)
+ [Search Engine Optimization (SEO)](seo.html)
+ [Serialization](serialization.html)
+ [var\_export()](var_export.html)
+ [Determinism](determinism.html)
+ [Load Balancer](load-balancer.html)
+ [Deduplication](deduplication.html)
+ [Fingerprint](fingerprint.html)
+ [Latency](latency.html)
+ [Rate Limiting](rate-limit.html)
+ [Replay](replay.html)
+ [Time To Live (TTL)](ttl.html)
+ [Cache Stampede](cache-stampede.html)
+ [CDN](cdn.html)
+ [Eventual Consistency](eventual-consistency.html)
+ [Shared Memory](shared-memory.html)
+ [Temporary](temporary.html)
