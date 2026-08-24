# Connection Pool
A connection pool is a set of pre-established, reusable connections, most often to a database or another network service, that are handed out to callers on demand and returned to the pool instead of being closed after use. Pooling avoids paying the cost of establishing a new TCP connection, and possibly a new TLS and authentication handshake, on every single request, and it caps how many connections to a given dependency may be open at once.

That cap is itself a resilience mechanism: it acts as a bulkhead, preventing a burst of traffic, or a slow dependency, from opening unbounded numbers of connections and exhausting the dependency's own connection limit, file descriptors, or memory. When the pool is exhausted, callers either wait, up to a configured timeout, or fail fast, depending on how the pool is configured.

Traditional PHP, being a share-nothing, one-request-per-process model, cannot keep a connection pool alive in application memory across requests the way a long-running process in another language would: each PHP-FPM worker opens its own connections, and true pooling across workers requires an external pooler such as ``PgBouncer`` for PostgreSQL, ``ProxySQL`` for MySQL, or a persistent connection, ``PDO::ATTR_PERSISTENT``, kept open by the underlying process across requests within the same worker. Long-running PHP processes, such as Swoole, RoadRunner, or a queue worker, can maintain an in-memory pool for their entire lifetime, closer to how connection pools work in other languages.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/connection-pool.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/connection-pool.html","name":"Connection Pool","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Aug 2026 07:36:13 +0000","dateModified":"Sun, 16 Aug 2026 07:36:13 +0000","description":"A connection pool is a set of pre-established, reusable connections, most often to a database or another network service, that are handed out to callers on demand and returned to the pool instead of being closed after use","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/connection-pool.html"]}],"alternateName":["connection-pooling"],"keywords":["architecture","performance","reliability"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bulkhead.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resilience.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pdo.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rdbms.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/timeout.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fault-isolation.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/pdo.connections.php"},{"@type":"CreativeWork","name":"PgBouncer","url":"https:\/\/www.pgbouncer.org\/"},{"@type":"CreativeWork","name":"ProxySQL","url":"https:\/\/proxysql.com\/"},{"@type":"CreativeWork","name":"Resilience Patterns in PHP: Timeouts, Retries with Jitter, Circuit Breakers, and Bulkheads","url":"https:\/\/medium.com\/@mohamadshahkhajeh\/%EF%B8%8F-resilience-patterns-in-php-timeouts-retries-with-jitter-circuit-breakers-and-bulkheads-962ebf8deed1"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"connection-pool"}]}]}</script>
```php
<?php

    // Persistent PDO connection, reused across requests handled by the same worker
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_PERSISTENT => true,
    ]);

?>
```

**[Documentation](https://www.php.net/manual/en/pdo.connections.php)**
## See Also

+ [PgBouncer](https://www.pgbouncer.org/)
+ [ProxySQL](https://proxysql.com/)
+ [Resilience Patterns in PHP: Timeouts, Retries with Jitter, Circuit Breakers, and Bulkheads](https://medium.com/@mohamadshahkhajeh/%EF%B8%8F-resilience-patterns-in-php-timeouts-retries-with-jitter-circuit-breakers-and-bulkheads-962ebf8deed1)

## Related

+ [Bulkhead](bulkhead.html)
+ [Resilience](resilience.html)
+ [PHP Data Objects (PDO)](pdo.html)
+ [Relational DataBase Management System (RDBMS)](rdbms.html)
+ [Timeout](timeout.html)
+ [Fault Isolation](fault-isolation.html)
