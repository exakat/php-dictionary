# ACID
ACID is an acronym for the four properties that guarantee reliable database transactions. It stands for Atomicity, Consistency, Isolation, and Durability.

+ Atomicity: a transaction either completes entirely or not at all. If any step fails, all changes are rolled back, leaving the database as if the transaction never started.
+ Consistency: a transaction brings the database from one valid state to another, respecting all defined constraints, rules, and cascades. It cannot leave data in a logically invalid state.
+ Isolation: concurrent transactions execute as if they were serial. The intermediate state of a transaction is not visible to other transactions. The degree of isolation is configurable.
+ Durability: once a transaction is committed, it persists even in the event of a system crash. Achieved through write-ahead logging and durable storage.

ACID transactions are available through PDO via ``beginTransaction()``, ``commit()``, and ``rollBack()``. Most relational databases, ``MySQL/InnoDB``, ``PostgreSQL``, ``SQLite``, etc. provide full ACID compliance.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/acid.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/acid.html","name":"ACID","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:32:00 +0000","dateModified":"Tue, 04 Aug 2026 11:32:00 +0000","description":"ACID is an acronym for the four properties that guarantee reliable database transactions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ACID.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"acid"}]}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/ACID)**
## See Also

+ [PDO::beginTransaction](https://www.php.net/manual/en/pdo.begintransaction.php)

## Related

+ [Database Commit](database-commit.html)
+ [PHP Data Objects (PDO)](pdo.html)
+ [Eventual Consistency](eventual-consistency.html)
+ [Distributed Transactions](distributed-transactions.html)
+ [Write-Ahead Logging (WAL)](wal.html)
+ [Transaction](transaction.html)
