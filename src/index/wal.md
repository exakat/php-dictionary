# Write-Ahead Logging (WAL)
Write-Ahead Logging, also called ``WAL``, is a standard technique for ensuring data integrity in databases. Before modifying data pages on disk, the database first appends a record of the change to a durable sequential log. If a crash occurs mid-transaction, the database replays the log at startup to reach a consistent state.

``WAL`` is the durability mechanism behind ACID transactions in PostgreSQL, SQLite with its ``WAL`` journal mode, and MySQL/``InnoDB``, with its redo log. It also enables streaming replication: replicas consume the primary's ``WAL`` stream to stay in sync.

PHP applications interact with ``WAL`` indirectly through PDO or ``MySQLi``. SQLite's ``WAL`` mode can be activated explicitly and improves read concurrency because readers no longer block writers.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wal.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wal.html","name":"Write-Ahead Logging (WAL)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:31:25 +0000","dateModified":"Thu, 06 Aug 2026 05:31:25 +0000","description":"Write-Ahead Logging, also called WAL, is a standard technique for ensuring data integrity in databases","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wal.html"]}],"alternateName":["write-ahead-logging","write-ahead-log"],"keywords":["acronym","concept","database"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/acid.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/transaction.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database-commit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rollback.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pdo.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-transactions.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/eventual-consistency.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Write-ahead_logging"},{"@type":"CreativeWork","name":"SQLite WAL mode","url":"https:\/\/www.sqlite.org\/wal.html"},{"@type":"CreativeWork","name":"PostgreSQL WAL introduction","url":"https:\/\/www.postgresql.org\/docs\/current\/wal-intro.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"wal"}]}]}</script>
```php
<?php

    // Enable WAL journal mode in SQLite for better read concurrency
    $pdo = new PDO('sqlite:/var/db/app.db');
    $pdo->exec('PRAGMA journal_mode=WAL');
    
    $mode = $pdo->query('PRAGMA journal_mode')->fetchColumn();
    echo $mode; // 'wal'

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Write-ahead_logging)**
## See Also

+ [SQLite WAL mode](https://www.sqlite.org/wal.html)
+ [PostgreSQL WAL introduction](https://www.postgresql.org/docs/current/wal-intro.html)

## Related

+ [ACID](acid.html)
+ [Transaction](transaction.html)
+ [Database Commit](database-commit.html)
+ [Rollback](rollback.html)
+ [PHP Data Objects (PDO)](pdo.html)
+ [Distributed Transactions](distributed-transactions.html)
+ [Eventual Consistency](eventual-consistency.html)
