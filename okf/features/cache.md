---
type: "PHP Feature"
title: "Cache"
description: "Cache, or caching, is a technique used to store and reuse the results of expensive operations to improve performance."
resource: "https://en.wikipedia.org/wiki/Cache_(computing)"
tags: ["architecture", "design"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://en.wikipedia.org/wiki/Cache_(computing)](https://en.wikipedia.org/wiki/Cache_(computing))

## See Also
- [PHP cache](https://www.php-cache.com/en/latest/)

## Related
- [Memoization](/features/memoization.md)
- [Hoisting](/features/hoisting.md)
- [Horizontal Scaling](/features/horizontal-scaling.md)
- [Search Engine](/features/search-engine.md)
- [Search Engine Optimization (SEO)](/features/seo.md)
- [Serialization](/features/serialization.md)
- [var_export()](/features/var_export.md)
- [Determinism](/features/determinism.md)
- [Load Balancer](/features/load-balancer.md)
- [Deduplication](/features/deduplication.md)
- [Fingerprint](/features/fingerprint.md)
- [Latency](/features/latency.md)
- [Rate Limiting](/features/rate-limit.md)
- [Replay](/features/replay.md)
- [Time To Live (TTL)](/features/ttl.md)
- [Cache Stampede](/features/cache-stampede.md)
- [CDN](/features/cdn.md)
- [Eventual Consistency](/features/eventual-consistency.md)
- [Shared Memory](/features/shared-memory.md)
- [Temporary](/features/temporary.md)
- [APCu](/features/apcu.md)
- [Redis](/features/redis.md)
- [Source Of Truth](/features/source-of-truth.md)
- [Stale-While-Revalidate](/features/stale-while-revalidate.md)

