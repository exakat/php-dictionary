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
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shared.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shared.html","name":"Shared","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:01:43 +0000","dateModified":"Sat, 08 Aug 2026 08:01:43 +0000","description":"Shared describes a resource, whether it is memory, state, a database, a library, a connection, or an object, that is accessible by more than one process, thread, request, or component at the same time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Shared.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"shared"}]}]}</script>
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

**[Documentation](https://www.php.net/manual/en/language.variables.scope.php)**
## See Also

+ [Shared-State Concurrency - The Rust Programming Language](https://doc.rust-lang.org/book/ch16-03-shared-state.html)

## Related

+ [Shared Memory](shared-memory.html)
+ [Shared Database](shared-database.html)
+ [Mutable State](mutable-state.html)
+ [Race Condition](race-condition.html)
+ [Global State](global-state.html)
+ [Singleton](singleton.html)
+ [Concurrency](concurrency.html)
