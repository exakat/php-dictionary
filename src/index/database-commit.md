# Database Commit
A database commit makes a transaction's changes permanent. Once committed, the modifications are durable and visible to other connections.

A commit is issued via a call to a commit method, such as ``PDO::commit()`` or ``mysqli_commit()`` after a sequence of statements executed inside a transaction started with ``PDO::beginTransaction()`` or ``mysqli_query()``. If any step fails, ``PDO::rollBack()`` or ``mysqli_rollback()`` reverts all changes.

Auto-commit mode is enabled by default in PDO: each statement is immediately committed unless an explicit transaction is open.

Each database extension has its own commit method. There are often an auto-commit mode, where the commit is implicit after each query: it must be disabled to allow multiple queries in the same transaction.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database-commit.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database-commit.html","name":"Database Commit","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A database commit makes a transaction's changes permanent","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Database Commit.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"database-commit"}]}]}</script>
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

**[Documentation](https://www.php.net/manual/en/pdo.commit.php)**
## Related

+ [Transaction](transaction.html)
+ [Rollback](rollback.html)
+ [Database](database.html)
+ [PHP Data Objects (PDO)](pdo.html)
+ [Atomic Operation](atomic-operation.html)
+ [Commit](commit.html)
