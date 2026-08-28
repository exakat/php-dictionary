# Stale-While-Revalidate
Stale-while-revalidate is a caching strategy where, once a cached value has expired, the cache immediately serves that stale value to the caller while triggering a background refresh, rather than making the caller wait for a fresh value or fail outright when the origin is slow or unavailable. It began as an HTTP ``Cache-Control`` extension, ``stale-while-revalidate=N``, understood by browsers and CDN, but the same idea is commonly implemented by hand in application-level caches.

As a resilience pattern, stale-while-revalidate is a specific, graceful form of fallback: when a circuit breaker is open, a bulkhead is saturated, or a dependency is simply slow, returning the last known-good value, clearly marked as potentially stale, keeps the application responsive and usable instead of propagating the failure to the end user. It trades strict freshness for availability, and is appropriate whenever slightly outdated data, for example a product price that may be a few seconds old, is preferable to no data at all.

Stale-while-revalidate is usually implemented by storing both a value and its expiry in the cache, for example in Redis or through ``Symfony\Contracts\Cache``, checking on read whether the value is stale, and if so, returning it immediately while dispatching a job, or using a short-lived lock so only one process refreshes it, to fetch a fresh value in the background.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stale-while-revalidate.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stale-while-revalidate.html","name":"Stale-While-Revalidate","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 26 Aug 2026 10:22:36 +0000","dateModified":"Wed, 26 Aug 2026 10:22:36 +0000","description":"Stale-while-revalidate is a caching strategy where, once a cached value has expired, the cache immediately serves that stale value to the caller while triggering a background refresh, rather than making the caller wait for a fresh value or fail outright when the origin is slow or unavailable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stale-while-revalidate.html"]}],"alternateName":["swr"],"keywords":["architecture","performance","reliability"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fallback.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resilience.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/circuit-breaker.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bulkhead.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache-stampede.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.rfc-editor.org\/rfc\/rfc5861"},{"@type":"CreativeWork","name":"Resilience Patterns in PHP: Timeouts, Retries with Jitter, Circuit Breakers, and Bulkheads","url":"https:\/\/medium.com\/@mohamadshahkhajeh\/%EF%B8%8F-resilience-patterns-in-php-timeouts-retries-with-jitter-circuit-breakers-and-bulkheads-962ebf8deed1"},{"@type":"CreativeWork","name":"Stale While Revalidate Explained for Web Performance","url":"https:\/\/pagespeedplus.com\/blog\/stale-while-revalidate"},{"@type":"CreativeWork","name":"How to Build Cache Stampede Prevention","url":"https:\/\/oneuptime.com\/blog\/post\/2026-01-30-cache-stampede-prevention\/view"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"stale-while-revalidate"}]}]}</script>
```php
<?php

    // Simplified stale-while-revalidate around a cache read
    $entry = $cache->get($key); // ['value' => ..., 'expiresAt' => ...]

    if ($entry !== null) {
        if ($entry['expiresAt'] < time()) {
            dispatch(new RefreshCacheJob($key)); // refresh in the background
        }
        return $entry['value']; // serve the (possibly stale) value immediately
    }

?>
```

**[Documentation](https://www.rfc-editor.org/rfc/rfc5861)**
## See Also

+ [Resilience Patterns in PHP: Timeouts, Retries with Jitter, Circuit Breakers, and Bulkheads](https://medium.com/@mohamadshahkhajeh/%EF%B8%8F-resilience-patterns-in-php-timeouts-retries-with-jitter-circuit-breakers-and-bulkheads-962ebf8deed1)
+ [Stale While Revalidate Explained for Web Performance](https://pagespeedplus.com/blog/stale-while-revalidate)
+ [How to Build Cache Stampede Prevention](https://oneuptime.com/blog/post/2026-01-30-cache-stampede-prevention/view)

## Related

+ [Fallback](fallback.html)
+ [Cache](cache.html)
+ [Resilience](resilience.html)
+ [Circuit Breaker](circuit-breaker.html)
+ [Bulkhead](bulkhead.html)
+ [Cache Stampede](cache-stampede.html)

## Related packages

+ [symfony/cache](https://packagist.org/packages/symfony/cache)
