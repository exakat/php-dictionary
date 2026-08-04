# Cache Stampede
A cache stampede, also known as thundering herd or dog-piling, is a failure mode that occurs when many concurrent requests simultaneously discover that a cached value has expired or is missing. All requests then attempt to regenerate the cache at the same time, flooding the backend  with redundant work. This is especially destructive under high traffic because the backend, already under load, receives a sudden spike just when it is needed most.

Common mitigation strategies include: locking, where only one process regenerates the cache while others wait or serve stale data, probabilistic early expiration, where the cache refreshes slightly before it expires, based on a probability, and background revalidation, which returns stale data immediately while refreshing asynchronously.
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

## See Also

+ [Laravel Cache Locks](https://laravel.com/docs/cache#atomic-locks)
+ [XFetch: optimal probabilistic cache stampede prevention](https://cseweb.ucsd.edu/~avattani/papers/cache_stampede.pdf)

Related : [Cache](Cache), [Time To Live (TTL)](Time To Live (TTL)), [Race Condition](Race Condition), [Mutex](Mutex), [Lock](Lock), [Concurrency](Concurrency), [Rate Limiting](Rate Limiting), [Availability](Availability), [Reliability](Reliability)
