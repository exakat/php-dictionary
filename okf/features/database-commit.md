---
type: "PHP Feature"
title: "Database Commit"
description: "A database commit makes a transaction's changes permanent."
resource: "https://www.php.net/manual/en/pdo.commit.php"
tags: ["database", "transaction"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Database Commit

A database commit makes a transaction's changes permanent. Once committed, the modifications are durable and visible to other connections.

A commit is issued via a call to a commit method, such as ``PDO::commit()`` or ``mysqli_commit()`` after a sequence of statements executed inside a transaction started with ``PDO::beginTransaction()`` or ``mysqli_query()``. If any step fails, ``PDO::rollBack()`` or ``mysqli_rollback()`` reverts all changes.

Auto-commit mode is enabled by default in PDO: each statement is immediately committed unless an explicit transaction is open.

Each database extension has its own commit method. There is often an auto-commit mode, where the commit is implicit after each query: it must be disabled to allow multiple queries in the same transaction.

```php
<?php

    $pdo = new PDO('mysql:host=localhost;dbname=shop', 'user', 'pass');

    try {
        $pdo->beginTransaction();

        $pdo->exec("UPDATE accounts SET balance = balance - 100 WHERE id = 1");
        $pdo->exec("UPDATE accounts SET balance = balance + 100 WHERE id = 2");

        $pdo->commit();
    } catch (Exception $e) {
        $pdo->rollBack();
        throw $e;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/pdo.commit.php](https://www.php.net/manual/en/pdo.commit.php)

## See Also
- [How to Perform a Database Transaction from PHP using PDO](https://www.phptutorial.net/php-pdo/php-pdo-transaction/)
- [PHP PDO::rollBack Method](https://zetcode.com/php-pdo/rollback-method/)

## Related
- [Transaction](/features/transaction.md)
- [Rollback](/features/rollback.md)
- [Database](/features/database.md)
- [PHP Data Objects (PDO)](/features/pdo.md)
- [Atomic Operation](/features/atomic-operation.md)
- [Commit](/features/commit.md)

