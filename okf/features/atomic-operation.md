---
type: "concept"
title: "Atomic Operation"
description: "An atomic operation is an operation that is indivisible: it either completes fully or not at all, with no intermediate state visible to other threads or processes."
resource: "https://en.wikipedia.org/wiki/Atomicity_(database_systems)"
tags: ["concept", "database", "concurrency"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Atomic Operation

An atomic operation is an operation that is indivisible: it either completes fully or not at all, with no intermediate state visible to other threads or processes. Atomicity is one of the ACID properties of database transactions, and it is also a core concept in concurrent programming.

PHP is typically single-threaded per request, so atomicity concerns arise mainly in:

+ Database transactions: a set of SQL statements executed as a single atomic unit.
+ File operations: using locks to prevent partial writes.
+ Shared memory or caches: using atomic increment/decrement to avoid race conditions.

Without atomicity guarantees, concurrent access can lead to race conditions and data corruption.

```php
<?php

    // Atomic database transaction
    $pdo = new PDO('sqlite::memory:');
    $pdo->beginTransaction();
    
    try {
        $pdo->exec('UPDATE accounts SET balance = balance - 100 WHERE id = 1');
        $pdo->exec('UPDATE accounts SET balance = balance + 100 WHERE id = 2');
        $pdo->commit();
    } catch (PDOException $e) {
        $pdo->rollBack();
    }
    
    // Atomic increment in APCu (shared memory)
    apcu_inc('page_views', 1, $success);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Atomicity_(database_systems)](https://en.wikipedia.org/wiki/Atomicity_(database_systems))

## See Also
- [Transactions and auto-commit](https://www.php.net/manual/en/pdo.transactions.php)
- [PHP and Database Transactions: Ensuring Atomicity and Consistency](https://php-include.com/php-and-database-transactions-ensuring-atomicity-and-consistency/)

## Related
- [Transaction](/features/transaction.md)
- [Race Condition](/features/race-condition.md)
- [Database](/features/database.md)
- [Lock](/features/lock.md)
- [Database Commit](/features/database-commit.md)

