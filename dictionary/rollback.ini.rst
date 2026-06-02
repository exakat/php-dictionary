.. _rollback:
.. _revert:
.. _undo deployment:
.. meta::
	:description:
		Rollback: A rollback is the process of reverting a system, database, or deployment to a previous known-good state after a failure or undesirable change.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Rollback
	:twitter:description: Rollback: A rollback is the process of reverting a system, database, or deployment to a previous known-good state after a failure or undesirable change
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Rollback
	:og:type: article
	:og:description: A rollback is the process of reverting a system, database, or deployment to a previous known-good state after a failure or undesirable change
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/rollback.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Rollback","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:54 +0000","dateModified":"Thu, 28 May 2026 06:09:54 +0000","description":"A rollback is the process of reverting a system, database, or deployment to a previous known-good state after a failure or undesirable change","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Rollback.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Rollback
--------

A rollback is the process of reverting a system, database, or deployment to a previous known-good state after a failure or undesirable change.

In the context of databases, a rollback undoes all changes made since the beginning of a transaction, restoring the data to its state before the transaction started. PHP database extensions (PDO, MySQLi) support transactional rollback.

In the context of deployments, a rollback means re-deploying an earlier version of the application when a new release introduces critical bugs or regressions. Tools such as Deployer, Envoyer, Capistrano, and Kubernetes support deployment rollbacks.

In version control, a rollback can mean reverting a commit or resetting a branch to an earlier state using `git revert` or `git reset`.

Having a reliable rollback strategy is a key aspect of safe deployments and system resilience.

.. code-block:: php
   
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


`Documentation <https://www.php.net/manual/en/pdo.rollback.php>`__

See also `PDO::rollBack() <https://www.php.net/manual/en/pdo.rollback.php>`_ and `Deployer rollback <https://deployer.org/docs/7.x/recipe/deploy/rollback>`_.

Related : :ref:`Database <database>`, :ref:`PHP Data Objects (PDO) <pdo>`, :ref:`Transaction <transaction>`, :ref:`Deployment <deploy>`, :ref:`git <git>`, :ref:`Migration <migration>`, :ref:`Error Handling <error-handling>`
