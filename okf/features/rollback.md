---
type: "PHP Feature"
title: "Rollback"
description: "A rollback is the process of reverting a system, database, or deployment to a previous known-good state after a failure or undesirable change."
resource: "https://www.php.net/manual/en/pdo.rollback.php"
tags: ["database", "sdlc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/pdo.rollback.php](https://www.php.net/manual/en/pdo.rollback.php)

## See Also
- [Deployer rollback](https://deployer.org/docs/7.x/recipe/deploy/rollback)

## Related
- [Database](/features/database.md)
- [PHP Data Objects (PDO)](/features/pdo.md)
- [Transaction](/features/transaction.md)
- [Deployment](/features/deploy.md)
- [git](/features/git.md)
- [Migration](/features/migration.md)
- [Error Handling](/features/error-handling.md)
- [Database Commit](/features/database-commit.md)
- [Timing Attack](/features/timing-attack.md)
- [VCS Commit](/features/vcs-commit.md)

