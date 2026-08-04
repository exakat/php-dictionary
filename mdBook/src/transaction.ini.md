# Transaction
A transaction is a sequence of database operations that is treated as a single atomic unit. Either all operations succeed and are committed together, or any failure causes all of them to be rolled back, leaving the database unchanged.

Transactions follow the ACID properties, which are Atomicity, Consistency, Isolation, and Durability.

Transactions are most commonly used through PDO or database-specific extensions. An explicit transaction starts with ``beginTransaction()``, ends with ``commit()``, and is undone with ``rollBack()``.

ORMs such as Doctrine and Eloquent also expose transaction helpers and often wrap operations automatically.
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

## See Also

+ [ACID](https://en.wikipedia.org/wiki/ACID)

Related : [PHP Data Objects (PDO)](PHP Data Objects (PDO)), [Database](Database), [Exception](Exception), [Try-catch](Try-catch), [Rollback](Rollback), [Atomic Operation](Atomic Operation), [Database Commit](Database Commit), [Race Condition](Race Condition), [ACID](ACID), [Foreign Key](Foreign Key), [Referential Integrity](Referential Integrity), [Software Transactional Memory (STM)](Software Transactional Memory (STM)), [Write-Ahead Logging (WAL)](Write-Ahead Logging (WAL))
