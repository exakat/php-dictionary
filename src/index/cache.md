# Cache
Cache, or caching, is a technique used to store and reuse the results of expensive operations to improve performance.

There are different types of caches, depending on where they are applied: opcode cache, data cache, query cache, etc.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache.html","name":"Cache","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Aug 2026 09:38:31 +0000","dateModified":"Mon, 17 Aug 2026 09:38:31 +0000","description":"Cache, or caching, is a technique used to store and reuse the results of expensive operations to improve performance","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache.html"]}],"keywords":["architecture","design"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memoization.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hoisting.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/horizontal-scaling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/search-engine.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/seo.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serialization.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/var_export.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/determinism.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/load-balancer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deduplication.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fingerprint.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/latency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rate-limit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/replay.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ttl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache-stampede.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cdn.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/eventual-consistency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shared-memory.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/temporary.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/apcu.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/redis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/source-of-truth.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stale-while-revalidate.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Cache_(computing)"},{"@type":"CreativeWork","name":"PHP cache","url":"https:\/\/www.php-cache.com\/en\/latest\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"cache"}]}]}</script>
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
+ [APCu](apcu.html)
+ [Redis](redis.html)
+ [Source Of Truth](source-of-truth.html)
+ [Stale-While-Revalidate](stale-while-revalidate.html)
