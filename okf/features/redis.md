---
type: "PHP Feature"
title: "Redis"
description: "Redis is an in-memory key-value data store, used as a database, cache, message broker, or queue."
resource: "https://redis.io/docs/latest/develop/clients/php/"
tags: ["architecture", "database"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Redis

Redis is an in-memory key-value data store, used as a database, cache, message broker, or queue. It supports richer data structures than a plain key-value store, including hashes, lists, sets, sorted sets, and streams, and offers sub-millisecond latency thanks to its in-memory nature.

Redis can persist its dataset to disk, be replicated, and be clustered for high availability and horizontal scaling.

PHP applications talk to Redis mostly through the ``phpredis`` PECL C-extension, or through pure-PHP client libraries such as ``predis/predis``. Frameworks like Symfony and Laravel ship built-in cache, session, and queue adapters backed by Redis.

```php
<?php

    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);

    $redis->set('user:42', json_encode(['name' => 'Ada']));
    $user = json_decode($redis->get('user:42'), true);

?>
```

## Documentation
- [https://redis.io/docs/latest/develop/clients/php/](https://redis.io/docs/latest/develop/clients/php/)

## See Also
- [PHP and Redis Tutorial: Getting Started with PhpRedis](https://redis.io/tutorials/develop/php/)
- [How to Use Redis with PHP using PhpRedis with Examples](https://www.thegeekstuff.com/2014/02/phpredis/)

## Related
- [Key-value Stores](/features/key-value-store.md)
- [Cache](/features/cache.md)
- [Pub/Sub](/features/pubsub.md)
- [Sentinel](/features/sentinel.md)
- [Nosql Database](/features/nosql-database.md)

## Details
- Packagist: [predis/predis](https://packagist.org/packages/predis/predis)
- Extension: ext-redis

