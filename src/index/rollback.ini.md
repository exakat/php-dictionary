# Rollback
A rollback is the process of reverting a system, database, or deployment to a previous known-good state after a failure or undesirable change.

In the context of databases, a rollback undoes all changes made since the beginning of a transaction, restoring the data to its state before the transaction started. PHP database extensions support transactional rollback.

In the context of deployments, a rollback means re-deploying an earlier version of the application when a new release introduces critical bugs or regressions. Tools such as ``Deployer``, ``Envoyer``, ``Capistrano``, and ``Kubernetes`` support deployment rollbacks.

In version control, a rollback can mean reverting a commit or resetting a branch to an earlier state using ``git revert`` or ``git reset``.

Having a reliable rollback strategy is a key aspect of safe deployments and system resilience.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/rollback.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/rollback.ini.html","name":"Rollback","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:32:41 +0000","dateModified":"Fri, 10 Jul 2026 09:32:41 +0000","description":"A rollback is the process of reverting a system, database, or deployment to a previous known-good state after a failure or undesirable change","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Rollback.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Database transaction rollback with PDO
    $pdo = new PDO('mysql:host=localhost;dbname=shop', 'user', 'pass');
    
    try {
        $pdo->beginTransaction();
    
        $pdo->exec("UPDATE accounts SET balance = balance - 100 WHERE id = 1");
        $pdo->exec("UPDATE accounts SET balance = balance + 100 WHERE id = 2");
    
        $pdo->commit();
    } catch (Throwable $e) {
        $pdo->rollBack(); // Revert both changes
        throw $e;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/pdo.rollback.php)**
## See Also

+ [Deployer rollback](https://deployer.org/docs/7.x/recipe/deploy/rollback)

## Related

+ [Database](database.ini.html)
+ [PHP Data Objects (PDO)](pdo.ini.html)
+ [Transaction](transaction.ini.html)
+ [Deployment](deploy.ini.html)
+ [git](git.ini.html)
+ [Migration](migration.ini.html)
+ [Error Handling](error-handling.ini.html)
+ [Database Commit](database-commit.ini.html)
+ [Timing Attack](timing-attack.ini.html)
+ [VCS Commit](vcs-commit.ini.html)
