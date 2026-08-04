# Cache
Cache, or caching, is a technique used to store and reuse the results of expensive operations to improve performance.

There are different types of caches, depending on where they are applied: opcode cache, data cache, query cache, etc.
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

## See Also

+ [PHP cache](https://www.php-cache.com/en/latest/)

Related : [Memoization](Memoization), [Hoisting](Hoisting), [Horizontal Scaling](Horizontal Scaling), [Search Engine](Search Engine), [Search Engine Optimization (SEO)](Search Engine Optimization (SEO)), [Serialization](Serialization), [var_export()](var_export()), [Determinism](Determinism), [Load Balancer](Load Balancer), [Deduplication](Deduplication), [Fingerprint](Fingerprint), [Latency](Latency), [Rate Limiting](Rate Limiting), [Replay](Replay), [Time To Live (TTL)](Time To Live (TTL)), [Cache Stampede](Cache Stampede), [CDN](CDN), [Eventual Consistency](Eventual Consistency), [Shared Memory](Shared Memory), [Temporary](Temporary)
