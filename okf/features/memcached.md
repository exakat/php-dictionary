---
type: "extension"
title: "Memcached"
description: "Memcached is a distributed, in-memory key-value store used to cache the results of database queries, API calls, or rendered fragments, so that repeated requests can be served from RAM instead of recomputing them."
resource: "https://www.php.net/manual/en/book.memcached.php"
tags: ["extension", "cache"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Memcached

Memcached is a distributed, in-memory key-value store used to cache the results of database queries, API calls, or rendered fragments, so that repeated requests can be served from RAM instead of recomputing them. Unlike APCu, whose cache lives inside a single PHP process pool, Memcached runs as a separate daemon and can be shared across many web servers, making it a natural fit for load-balanced, multi-server deployments.

PHP talks to Memcached through the ``Memcached`` extension, built on ``libmemcached``, which offers a richer API, including binary protocol support and consistent hashing across a server pool, than the older, now unmaintained, ``memcache`` extension.

A ``Memcached`` instance connects to one or more servers with ``addServer()``, then stores and retrieves values with ``set()`` and ``get()``, optionally passing a TTL, time-to-live, after which the entry is evicted. Memcached has no built-in persistence: on restart or eviction under memory pressure, cached data is simply gone, so it should only ever hold data that can be recomputed.

```php
<?php

    $memcached = new Memcached();
    $memcached->addServer('127.0.0.1', 11211);

    $memcached->set('user:42', json_encode(['name' => 'Ada']), 300); // cache for 5 minutes

    $user = json_decode($memcached->get('user:42'), true);

?>
```

## Documentation
- [https://www.php.net/manual/en/book.memcached.php](https://www.php.net/manual/en/book.memcached.php)

## See Also
- [Memcached with PHP: Basics and Quick Tutorial](https://www.dragonflydb.io/guides/memcached-with-php-basics-and-quick-tutorial)
- [Memcached in PHP](https://www.geeksforgeeks.org/system-design/memcached-in-php/)

## Related
- [APCu](/features/apcu.md)
- [Redis](/features/redis.md)
- [Cache](/features/cache.md)
- [Key-value Stores](/features/key-value-store.md)
- [Shared Memory](/features/shared-memory.md)

## Details
- Extension: ext-memcached

