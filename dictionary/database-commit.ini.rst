.. _database-commit:
.. meta::
	:description:
		Database Commit: A database commit makes a transaction's changes permanent.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Database Commit
	:twitter:description: Database Commit: A database commit makes a transaction's changes permanent
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Database Commit
	:og:type: article
	:og:description: A database commit makes a transaction's changes permanent
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/database-commit.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Database Commit","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A database commit makes a transaction's changes permanent","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Database Commit.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Database Commit
---------------

A database commit makes a transaction's changes permanent. Once committed, the modifications are durable and visible to other connections.

A commit is issued via a call to a commit method, such as ``PDO::commit()`` or ``mysqli_commit()`` after a sequence of statements executed inside a transaction started with ``PDO::beginTransaction()`` or ``mysqli_query()``. If any step fails, ``PDO::rollBack()`` or ``mysqli_rollback()`` reverts all changes.

Auto-commit mode is enabled by default in PDO: each statement is immediately committed unless an explicit transaction is open.

Each database extension has its own commit method. There are often an auto-commit mode, where the commit is implicit after each query: it must be disabled to allow multiple queries in the same transaction.


.. code-block:: php
   
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


`Documentation <https://www.php.net/manual/en/pdo.commit.php>`__

Related : :ref:`Transaction <transaction>`, :ref:`Rollback <rollback>`, :ref:`Database <database>`, :ref:`PHP Data Objects (PDO) <pdo>`, :ref:`Atomic Operation <atomic-operation>`, :ref:`Commit <commit>`
