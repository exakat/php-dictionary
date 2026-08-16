# Transaction
A transaction is a sequence of database operations that is treated as a single atomic unit. Either all operations succeed and are committed together, or any failure causes all of them to be rolled back, leaving the database unchanged.

Transactions follow the ACID properties, which are Atomicity, Consistency, Isolation, and Durability.

Transactions are most commonly used through PDO or database-specific extensions. An explicit transaction starts with ``beginTransaction()``, ends with ``commit()``, and is undone with ``rollBack()``.

ORM such as Doctrine and Eloquent also expose transaction helpers and often wrap operations automatically.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/transaction.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/transaction.html","name":"Transaction","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:01:25 +0000","dateModified":"Sat, 08 Aug 2026 08:01:25 +0000","description":"A transaction is a sequence of database operations that is treated as a single atomic unit","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Transaction.html"]}],"keywords":["concept","database"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pdo.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/try.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rollback.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/atomic-operation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database-commit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/race-condition.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/acid.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/foreign-key.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/referential-integrity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/software-transactional-memory.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wal.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/pdo.transactions.php"},{"@type":"CreativeWork","name":"ACID","url":"https:\/\/en.wikipedia.org\/wiki\/ACID"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"transaction"}]}]}</script>
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

+ [PHP Data Objects (PDO)](pdo.html)
+ [Database](database.html)
+ [Exception](exception.html)
+ [Try-catch](try.html)
+ [Rollback](rollback.html)
+ [Atomic Operation](atomic-operation.html)
+ [Database Commit](database-commit.html)
+ [Race Condition](race-condition.html)
+ [ACID](acid.html)
+ [Foreign Key](foreign-key.html)
+ [Referential Integrity](referential-integrity.html)
+ [Software Transactional Memory (STM)](software-transactional-memory.html)
+ [Write-Ahead Logging (WAL)](wal.html)
