# Rollback
A rollback is the process of reverting a system, database, or deployment to a previous known-good state after a failure or undesirable change.

In the context of databases, a rollback undoes all changes made since the beginning of a transaction, restoring the data to its state before the transaction started. PHP database extensions support transactional rollback.

In the context of deployments, a rollback means re-deploying an earlier version of the application when a new release introduces critical bugs or regressions. Tools such as ``Deployer``, ``Envoyer``, ``Capistrano``, and ``Kubernetes`` support deployment rollbacks.

In version control, a rollback can mean reverting a commit or resetting a branch to an earlier state using ``git revert`` or ``git reset``.

Having a reliable rollback strategy is a key aspect of safe deployments and system resilience.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rollback.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rollback.html","name":"Rollback","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:32:41 +0000","dateModified":"Fri, 10 Jul 2026 09:32:41 +0000","description":"A rollback is the process of reverting a system, database, or deployment to a previous known-good state after a failure or undesirable change","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Rollback.html"]}],"alternateName":["revert","undo-deployment"],"keywords":["database","sdlc"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pdo.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/transaction.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deploy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/git.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/migration.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error-handling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database-commit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/timing-attack.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vcs-commit.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/pdo.rollback.php"},{"@type":"CreativeWork","name":"Deployer rollback","url":"https:\/\/deployer.org\/docs\/7.x\/recipe\/deploy\/rollback"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"rollback"}]}]}</script>
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

+ [Database](database.html)
+ [PHP Data Objects (PDO)](pdo.html)
+ [Transaction](transaction.html)
+ [Deployment](deploy.html)
+ [git](git.html)
+ [Migration](migration.html)
+ [Error Handling](error-handling.html)
+ [Database Commit](database-commit.html)
+ [Timing Attack](timing-attack.html)
+ [VCS Commit](vcs-commit.html)
