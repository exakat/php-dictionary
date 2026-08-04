# Rollback
A rollback is the process of reverting a system, database, or deployment to a previous known-good state after a failure or undesirable change.

In the context of databases, a rollback undoes all changes made since the beginning of a transaction, restoring the data to its state before the transaction started. PHP database extensions support transactional rollback.

In the context of deployments, a rollback means re-deploying an earlier version of the application when a new release introduces critical bugs or regressions. Tools such as ``Deployer``, ``Envoyer``, ``Capistrano``, and ``Kubernetes`` support deployment rollbacks.

In version control, a rollback can mean reverting a commit or resetting a branch to an earlier state using ``git revert`` or ``git reset``.

Having a reliable rollback strategy is a key aspect of safe deployments and system resilience.
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

## See Also

+ [Deployer rollback](https://deployer.org/docs/7.x/recipe/deploy/rollback)

Related : [Database](Database), [PHP Data Objects (PDO)](PHP Data Objects (PDO)), [Transaction](Transaction), [Deployment](Deployment), [git](git), [Migration](Migration), [Error Handling](Error Handling), [Database Commit](Database Commit), [Timing Attack](Timing Attack), [VCS Commit](VCS Commit)
