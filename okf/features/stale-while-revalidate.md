---
type: "PHP Feature"
title: "Stale-While-Revalidate"
description: "Stale-while-revalidate is a caching strategy where, once a cached value has expired, the cache immediately serves that stale value to the caller while triggering a background refresh, rather than making the caller wait for a fresh value or fail outright when the origin is slow or unavailable."
resource: "https://www.rfc-editor.org/rfc/rfc5861"
tags: ["architecture", "performance", "reliability"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Stale-While-Revalidate

Stale-while-revalidate is a caching strategy where, once a cached value has expired, the cache immediately serves that stale value to the caller while triggering a background refresh, rather than making the caller wait for a fresh value or fail outright when the origin is slow or unavailable. It began as an HTTP ``Cache-Control`` extension, ``stale-while-revalidate=N``, understood by browsers and CDN, but the same idea is commonly implemented by hand in application-level caches.

As a resilience pattern, stale-while-revalidate is a specific, graceful form of fallback: when a circuit breaker is open, a bulkhead is saturated, or a dependency is simply slow, returning the last known-good value, clearly marked as potentially stale, keeps the application responsive and usable instead of propagating the failure to the end user. It trades strict freshness for availability, and is appropriate whenever slightly outdated data, for example a product price that may be a few seconds old, is preferable to no data at all.

Stale-while-revalidate is usually implemented by storing both a value and its expiry in the cache, for example in Redis or through ``Symfony\Contracts\Cache``, checking on read whether the value is stale, and if so, returning it immediately while dispatching a job, or using a short-lived lock so only one process refreshes it, to fetch a fresh value in the background.

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

## Documentation
- [https://www.rfc-editor.org/rfc/rfc5861](https://www.rfc-editor.org/rfc/rfc5861)

## See Also
- [Resilience Patterns in PHP: Timeouts, Retries with Jitter, Circuit Breakers, and Bulkheads](https://medium.com/@mohamadshahkhajeh/%EF%B8%8F-resilience-patterns-in-php-timeouts-retries-with-jitter-circuit-breakers-and-bulkheads-962ebf8deed1)
- [Stale While Revalidate Explained for Web Performance](https://pagespeedplus.com/blog/stale-while-revalidate)
- [How to Build Cache Stampede Prevention](https://oneuptime.com/blog/post/2026-01-30-cache-stampede-prevention/view)

## Related
- [Fallback](/features/fallback.md)
- [Cache](/features/cache.md)
- [Resilience](/features/resilience.md)
- [Circuit Breaker](/features/circuit-breaker.md)
- [Bulkhead](/features/bulkhead.md)
- [Cache Stampede](/features/cache-stampede.md)

## Details
- Packagist: [symfony/cache](https://packagist.org/packages/symfony/cache)

