# Transaction
A transaction is a sequence of database operations that is treated as a single atomic unit. Either all operations succeed and are committed together, or any failure causes all of them to be rolled back, leaving the database unchanged.

Transactions follow the ACID properties, which are Atomicity, Consistency, Isolation, and Durability.

Transactions are most commonly used through PDO or database-specific extensions. An explicit transaction starts with ``beginTransaction()``, ends with ``commit()``, and is undone with ``rollBack()``.

ORMs such as Doctrine and Eloquent also expose transaction helpers and often wrap operations automatically.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/transaction.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/transaction.html","name":"Transaction","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 06:52:17 +0000","dateModified":"Tue, 04 Aug 2026 06:52:17 +0000","description":"A transaction is a sequence of database operations that is treated as a single atomic unit","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Transaction.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/pdo.transactions.php)**
## See Also

+ [ACID](https://en.wikipedia.org/wiki/ACID)

## Related

+ [PHP Data Objects (PDO)](pdo.ini.html)
+ [Database](database.ini.html)
+ [Exception](exception.ini.html)
+ [Try-catch](try.ini.html)
+ [Rollback](rollback.ini.html)
+ [Atomic Operation](atomic-operation.ini.html)
+ [Database Commit](database-commit.ini.html)
+ [Race Condition](race-condition.ini.html)
+ [ACID](acid.ini.html)
+ [Foreign Key](foreign-key.ini.html)
+ [Referential Integrity](referential-integrity.ini.html)
+ [Software Transactional Memory (STM)](software-transactional-memory.ini.html)
+ [Write-Ahead Logging (WAL)](wal.ini.html)
