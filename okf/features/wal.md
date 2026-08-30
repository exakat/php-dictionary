---
type: "acronym"
title: "Write-Ahead Logging (WAL)"
description: "Write-Ahead Logging, also called ``WAL``, is a standard technique for ensuring data integrity in databases."
resource: "https://en.wikipedia.org/wiki/Write-ahead_logging"
tags: ["acronym", "concept", "database"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Write-Ahead Logging (WAL)

Write-Ahead Logging, also called ``WAL``, is a standard technique for ensuring data integrity in databases. Before modifying data pages on disk, the database first appends a record of the change to a durable sequential log. If a crash occurs mid-transaction, the database replays the log at startup to reach a consistent state.

``WAL`` is the durability mechanism behind ACID transactions in PostgreSQL, SQLite with its ``WAL`` journal mode, and MySQL/``InnoDB``, with its redo log. It also enables streaming replication: replicas consume the primary's ``WAL`` stream to stay in sync.

PHP applications interact with ``WAL`` indirectly through PDO or ``MySQLi``. SQLite's ``WAL`` mode can be activated explicitly and improves read concurrency because readers no longer block writers.

```php
<?php

    // Enable WAL journal mode in SQLite for better read concurrency
    $pdo = new PDO('sqlite:/var/db/app.db');
    $pdo->exec('PRAGMA journal_mode=WAL');
    
    $mode = $pdo->query('PRAGMA journal_mode')->fetchColumn();
    echo $mode; // 'wal'

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Write-ahead_logging](https://en.wikipedia.org/wiki/Write-ahead_logging)

## See Also
- [SQLite WAL mode](https://www.sqlite.org/wal.html)
- [PostgreSQL WAL introduction](https://www.postgresql.org/docs/current/wal-intro.html)

## Related
- [ACID](/features/acid.md)
- [Transaction](/features/transaction.md)
- [Database Commit](/features/database-commit.md)
- [Rollback](/features/rollback.md)
- [PHP Data Objects (PDO)](/features/pdo.md)
- [Distributed Transactions](/features/distributed-transactions.md)
- [Eventual Consistency](/features/eventual-consistency.md)

