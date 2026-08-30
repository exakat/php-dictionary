---
type: "concept"
title: "Transaction"
description: "A transaction is a sequence of database operations that is treated as a single atomic unit."
resource: "https://www.php.net/manual/en/pdo.transactions.php"
tags: ["concept", "database"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Transaction

A transaction is a sequence of database operations that is treated as a single atomic unit. Either all operations succeed and are committed together, or any failure causes all of them to be rolled back, leaving the database unchanged.

Transactions follow the ACID properties, which are Atomicity, Consistency, Isolation, and Durability.

Transactions are most commonly used through PDO or database-specific extensions. An explicit transaction starts with ``beginTransaction()``, ends with ``commit()``, and is undone with ``rollBack()``.

ORM such as Doctrine and Eloquent also expose transaction helpers and often wrap operations automatically.

```php
<?php

    $pdo = new PDO('mysql:host=localhost;dbname=shop', 'user', 'pass');

    try {
        $pdo->beginTransaction();

        $pdo->exec("UPDATE accounts SET balance = balance - 100 WHERE id = 1");
        $pdo->exec("UPDATE accounts SET balance = balance + 100 WHERE id = 2");

        $pdo->commit();
    } catch (Throwable $e) {
        $pdo->rollBack();
        throw $e;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/pdo.transactions.php](https://www.php.net/manual/en/pdo.transactions.php)

## See Also
- [ACID](https://en.wikipedia.org/wiki/ACID)

## Related
- [PHP Data Objects (PDO)](/features/pdo.md)
- [Database](/features/database.md)
- [Exception](/features/exception.md)
- [Rollback](/features/rollback.md)
- [Atomic Operation](/features/atomic-operation.md)
- [Database Commit](/features/database-commit.md)
- [Race Condition](/features/race-condition.md)
- [ACID](/features/acid.md)
- [Foreign Key](/features/foreign-key.md)
- [Referential Integrity](/features/referential-integrity.md)
- [Software Transactional Memory (STM)](/features/software-transactional-memory.md)
- [Write-Ahead Logging (WAL)](/features/wal.md)

## Details
- Extension: ext-pdo

