# Cache Stampede
A cache stampede, also known as thundering herd or dog-piling, is a failure mode that occurs when many concurrent requests simultaneously discover that a cached value has expired or is missing. All requests then attempt to regenerate the cache at the same time, flooding the backend  with redundant work. This is especially destructive under high traffic because the backend, already under load, receives a sudden spike just when it is needed most.

Common mitigation strategies include: locking, where only one process regenerates the cache while others wait or serve stale data, probabilistic early expiration, where the cache refreshes slightly before it expires, based on a probability, and background revalidation, which returns stale data immediately while refreshing asynchronously.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache-stampede.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache-stampede.html","name":"Cache Stampede","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:57:58 +0000","dateModified":"Thu, 09 Jul 2026 08:57:58 +0000","description":"A cache stampede, also known as thundering herd or dog-piling, is a failure mode that occurs when many concurrent requests simultaneously discover that a cached value has expired or is missing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Cache Stampede.html"]}],"alternateName":["thundering-herd","dog-piling"],"keywords":["architecture","performance","concurrency"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ttl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/race-condition.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mutex.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lock.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concurrency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rate-limit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/availability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reliability.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Cache_stampede"},{"@type":"CreativeWork","name":"Laravel Cache Locks","url":"https:\/\/laravel.com\/docs\/cache#atomic-locks"},{"@type":"CreativeWork","name":"XFetch: optimal probabilistic cache stampede prevention","url":"https:\/\/cseweb.ucsd.edu\/~avattani\/papers\/cache_stampede.pdf"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"cache-stampede"}]}]}</script>
```php
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
```

**[Documentation](https://en.wikipedia.org/wiki/Cache_stampede)**
## See Also

+ [Laravel Cache Locks](https://laravel.com/docs/cache#atomic-locks)
+ [XFetch: optimal probabilistic cache stampede prevention](https://cseweb.ucsd.edu/~avattani/papers/cache_stampede.pdf)

## Related

+ [Cache](cache.html)
+ [Time To Live (TTL)](ttl.html)
+ [Race Condition](race-condition.html)
+ [Mutex](mutex.html)
+ [Lock](lock.html)
+ [Concurrency](concurrency.html)
+ [Rate Limiting](rate-limit.html)
+ [Availability](availability.html)
+ [Reliability](reliability.html)

## Related packages

+ [symfony/lock](https://packagist.org/packages/symfony/lock)
+ [malkusch/lock](https://packagist.org/packages/malkusch/lock)
+ [php-cache/stampede-protection](https://packagist.org/packages/php-cache/stampede-protection)
+ [symfony/cache](https://packagist.org/packages/symfony/cache)
+ [ronnylt/redlock-php](https://packagist.org/packages/ronnylt/redlock-php)
