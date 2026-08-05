# Write-Ahead Logging (WAL)
Write-Ahead Logging, also called ``WAL``, is a standard technique for ensuring data integrity in databases. Before modifying data pages on disk, the database first appends a record of the change to a durable sequential log. If a crash occurs mid-transaction, the database replays the log at startup to reach a consistent state.

``WAL`` is the durability mechanism behind ACID transactions in PostgreSQL, SQLite with its ``WAL`` journal mode, and MySQL/InnoDB, with its redo log. It also enables streaming replication: replicas consume the primary's ``WAL`` stream to stay in sync.

PHP applications interact with ``WAL`` indirectly through PDO or ``MySQLi``. SQLite's ``WAL`` mode can be activated explicitly and improves read concurrency because readers no longer block writers.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/wal.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/wal.ini.html","name":"Write-Ahead Logging (WAL)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 17:06:12 +0000","dateModified":"Mon, 03 Aug 2026 17:06:12 +0000","description":"Write-Ahead Logging, also called ``WAL``, is a standard technique for ensuring data integrity in databases","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Write-Ahead Logging (WAL).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [ACID](acid.ini.html)
+ [Transaction](transaction.ini.html)
+ [Database Commit](database-commit.ini.html)
+ [Rollback](rollback.ini.html)
+ [PHP Data Objects (PDO)](pdo.ini.html)
+ [Distributed Transactions](distributed-transactions.ini.html)
+ [Eventual Consistency](eventual-consistency.ini.html)
