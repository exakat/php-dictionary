---
type: "extension"
title: "APCu"
description: "``APCu``, ``APC`` User Cache, is a PHP extension that provides a shared-memory, in-process key-value store for caching arbitrary data between requests, without needing an external service like Memcached or Redis."
resource: "https://www.php.net/manual/en/book.apcu.php"
tags: ["extension", "cache"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# APCu

``APCu``, ``APC`` User Cache, is a PHP extension that provides a shared-memory, in-process key-value store for caching arbitrary data between requests, without needing an external service like Memcached or Redis.

``APCu`` is the successor of ``APC``, Alternative PHP Cache, once its opcode-caching part was superseded by ``OPcache``; only the user-cache API survived under the name APCu.

Common functions include:

+ ``apcu_store()`` to write a value, with an optional TTL, time-to-live
+ ``apcu_fetch()`` to read a value back
+ ``apcu_delete()`` to remove an entry
+ ``apcu_exists()`` to check for a key without fetching its value
+ ``apcu_inc()`` / ``apcu_dec()`` for atomic counters
+ ``apcu_clear_cache()`` to flush the whole cache

Because the cache lives in shared memory local to the PHP process pool, it is fast, but it is not shared across servers; in a multi-server, load-balanced setup, a distributed cache such as Redis or Memcached is usually preferred.

```php
<?php

    if (apcu_exists('user_count')) {
        $count = apcu_fetch('user_count');
    } else {
        $count = count_users_from_database();
        apcu_store('user_count', $count, 300); // cache for 5 minutes
    }

    apcu_inc('page_views');

?>
```

## Documentation
- [https://www.php.net/manual/en/book.apcu.php](https://www.php.net/manual/en/book.apcu.php)

## See Also
- [A Guide to the PHP APCu Library for Caching and Performance Optimization](https://reintech.io/blog/guide-php-apcu-library-caching-performance-optimization)
- [GitHub - krakjoe/apcu](https://github.com/krakjoe/apcu)

## Related
- [Shared Memory](/features/shared-memory.md)
- [Opcache](/features/opcache.md)
- [Cache](/features/cache.md)
- [Memcached](/features/memcached.md)
- [Redis](/features/redis.md)
- [Session](/features/session.md)

## Details
- Extension: ext-apcu

