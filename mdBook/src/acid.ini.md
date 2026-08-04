# ACID
ACID is an acronym for the four properties that guarantee reliable database transactions. It stands for Atomicity, Consistency, Isolation, and Durability.

+ Atomicity: a transaction either completes entirely or not at all. If any step fails, all changes are rolled back, leaving the database as if the transaction never started.
+ Consistency: a transaction brings the database from one valid state to another, respecting all defined constraints, rules, and cascades. It cannot leave data in a logically invalid state.
+ Isolation: concurrent transactions execute as if they were serial. The intermediate state of a transaction is not visible to other transactions. The degree of isolation is configurable.
+ Durability: once a transaction is committed, it persists even in the event of a system crash. Achieved through write-ahead logging and durable storage.

ACID transactions are available through PDO via ``beginTransaction()``, ``commit()``, and ``rollBack()``. Most relational databases, ``MySQL/InnoDB``, ``PostgreSQL``, ``SQLite``, etc. provide full ACID compliance.
```php
<?php

    $pdo = new PDO('mysql:host=localhost;dbname=shop', 'user', 'pass');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $pdo->beginTransaction(); // start atomic unit
    
    try {
        $pdo->exec('UPDATE accounts SET balance = balance - 100 WHERE id = 1');
        $pdo->exec('UPDATE accounts SET balance = balance + 100 WHERE id = 2');
        $pdo->commit(); // durable on success
    } catch (PDOException $e) {
        $pdo->rollBack(); // atomicity: undo both updates on failure
        throw $e;
    }

?>
```

## See Also

+ [PDO::beginTransaction](https://www.php.net/manual/en/pdo.begintransaction.php)

Related : [Database Commit](Database Commit), [PHP Data Objects (PDO)](PHP Data Objects (PDO)), [Eventual Consistency](Eventual Consistency), [Distributed Transactions](Distributed Transactions), [Write-Ahead Logging (WAL)](Write-Ahead Logging (WAL)), [Transaction](Transaction)
