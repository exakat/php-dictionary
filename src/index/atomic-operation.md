# Atomic Operation
An atomic operation is an operation that is indivisible: it either completes fully or not at all, with no intermediate state visible to other threads or processes. Atomicity is one of the ACID properties of database transactions, and it is also a core concept in concurrent programming.

PHP is typically single-threaded per request, so atomicity concerns arise mainly in:

+ Database transactions: a set of SQL statements executed as a single atomic unit.
+ File operations: using locks to prevent partial writes.
+ Shared memory or caches: using atomic increment/decrement to avoid race conditions.

Without atomicity guarantees, concurrent access can lead to race conditions and data corruption.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/atomic-operation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/atomic-operation.html","name":"Atomic Operation","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 04:50:39 +0000","dateModified":"Tue, 07 Jul 2026 04:50:39 +0000","description":"An atomic operation is an operation that is indivisible: it either completes fully or not at all, with no intermediate state visible to other threads or processes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/atomic-operation.html"]}],"alternateName":["atomicity"],"keywords":["concept","database","concurrency"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/transaction.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/race-condition.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concurency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lock.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database-commit.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Atomicity_(database_systems)"},{"@type":"CreativeWork","name":"Transactions and auto-commit","url":"https:\/\/www.php.net\/manual\/en\/pdo.transactions.php"},{"@type":"CreativeWork","name":"PHP and Database Transactions: Ensuring Atomicity and Consistency","url":"https:\/\/php-include.com\/php-and-database-transactions-ensuring-atomicity-and-consistency\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"atomic-operation"}]}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Atomicity_(database_systems))**
## See Also

+ [Transactions and auto-commit](https://www.php.net/manual/en/pdo.transactions.php)
+ [PHP and Database Transactions: Ensuring Atomicity and Consistency](https://php-include.com/php-and-database-transactions-ensuring-atomicity-and-consistency/)

## Related

+ [Transaction](transaction.html)
+ [Race Condition](race-condition.html)
+ [Concurrency](concurency.html)
+ [Database](database.html)
+ [Lock](lock.html)
+ [Database Commit](database-commit.html)
