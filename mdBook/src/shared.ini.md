# Shared
Shared describes a resource, whether it is memory, state, a database, a library, a connection, or an object, that is accessible by more than one process, thread, request, or component at the same time.

Sharing is what makes collaboration between parts of a system possible: a shared library avoids duplicating code, a shared cache avoids duplicating work, a shared connection pool avoids duplicating overhead. But anything shared is also a coupling point: if one consumer changes how it uses the resource, or writes to it in an unexpected way, every other consumer can be affected.

PHP has specifically an execution philosophy that is shared-nothing: each request typically runs in its own process or thread with its own memory, so state does not leak between requests by default. Explicit mechanisms exist to opt into sharing across that boundary: sessions, a shared cache such as Redis or Memcached, shared memory segments via ``shmop`` or ``APCu``, or a shared database.

Common qualifiers built on ``shared``:

+ Shared state: any data that more than one part of a program can read or write, the main source of race conditions when accessed concurrently.
+ Shared memory: a memory segment accessible by multiple processes, see ``shmop``.
+ Shared database: multiple services reading and writing the same schema, often considered an anti-pattern in microservices.
+ Shared library: compiled code, ``.so`` or ``.dll``, loaded once and used by multiple processes, such as a PHP extension.
+ Shared nothing: the opposite architecture, where each unit of execution owns its own state exclusively.
```php
<?php

    // Shared state via a static property: every request within the
    // same worker process sees the same array.
    class Counter {
        private static array $hits = [];

        public static function increment(string $key): void {
            self::$hits[$key] = (self::$hits[$key] ?? 0) + 1;
        }
    }

    // Shared cache: multiple processes read and write the same key.
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);
    $redis->incr('shared:page-views');

?>
```

Related : [Shared Memory](Shared Memory), [Shared Database](Shared Database), [Mutable State](Mutable State), [Race Condition](Race Condition), [Global State](Global State), [Singleton](Singleton), [Concurrency](Concurrency)
