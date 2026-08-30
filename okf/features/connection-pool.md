---
type: "PHP Feature"
title: "Connection Pool"
description: "A connection pool, or connection pooling, is a set of pre-established, reusable connections, most often to a database or another network service, that are handed out to callers on demand and returned to the pool instead of being closed after use."
resource: "https://www.php.net/manual/en/pdo.connections.php"
tags: ["architecture", "performance", "reliability"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Connection Pool

A connection pool, or connection pooling, is a set of pre-established, reusable connections, most often to a database or another network service, that are handed out to callers on demand and returned to the pool instead of being closed after use. Pooling avoids paying the cost of establishing a new TCP connection, and possibly a new TLS and authentication handshake, on every single request, and it caps how many connections to a given dependency may be open at once.

That cap is itself a resilience mechanism: it acts as a bulkhead, preventing a burst of traffic, or a slow dependency, from opening unbounded numbers of connections and exhausting the dependency's own connection limit, file descriptors, or memory. When the pool is exhausted, callers either wait, up to a configured timeout, or fail fast, depending on how the pool is configured.

Traditional PHP, being a share-nothing, one-request-per-process model, cannot keep a connection pool alive in application memory across requests the way a long-running process in another language would: each PHP-FPM worker opens its own connections, and true pooling across workers requires an external pooler such as ``PgBouncer`` for PostgreSQL, ``ProxySQL`` for MySQL, or a persistent connection, ``PDO::ATTR_PERSISTENT``, kept open by the underlying process across requests within the same worker. Long-running PHP processes, such as Swoole, RoadRunner, or a queue worker, can maintain an in-memory pool for their entire lifetime, closer to how connection pools work in other languages.

```php
<?php

    // Persistent PDO connection, reused across requests handled by the same worker
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_PERSISTENT => true,
    ]);

?>
```

## Documentation
- [https://www.php.net/manual/en/pdo.connections.php](https://www.php.net/manual/en/pdo.connections.php)

## See Also
- [PgBouncer](https://www.pgbouncer.org/)
- [ProxySQL](https://proxysql.com/)
- [Resilience Patterns in PHP: Timeouts, Retries with Jitter, Circuit Breakers, and Bulkheads](https://medium.com/@mohamadshahkhajeh/%EF%B8%8F-resilience-patterns-in-php-timeouts-retries-with-jitter-circuit-breakers-and-bulkheads-962ebf8deed1)

## Related
- [Bulkhead](/features/bulkhead.md)
- [Resilience](/features/resilience.md)
- [PHP Data Objects (PDO)](/features/pdo.md)
- [Relational DataBase Management System (RDBMS)](/features/rdbms.md)
- [Timeout](/features/timeout.md)
- [Fault Isolation](/features/fault-isolation.md)

## Details
- Extension: ext-pdo

