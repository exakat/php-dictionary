# Database Commit
A database commit makes a transaction's changes permanent. Once committed, the modifications are durable and visible to other connections.

A commit is issued via a call to a commit method, such as ``PDO::commit()`` or ``mysqli_commit()`` after a sequence of statements executed inside a transaction started with ``PDO::beginTransaction()`` or ``mysqli_query()``. If any step fails, ``PDO::rollBack()`` or ``mysqli_rollback()`` reverts all changes.

Auto-commit mode is enabled by default in PDO: each statement is immediately committed unless an explicit transaction is open.

Each database extension has its own commit method. There are often an auto-commit mode, where the commit is implicit after each query: it must be disabled to allow multiple queries in the same transaction.

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

Related : [Transaction](Transaction), [Rollback](Rollback), [Database](Database), [PHP Data Objects (PDO)](PHP Data Objects (PDO)), [Atomic Operation](Atomic Operation), [Commit](Commit)
