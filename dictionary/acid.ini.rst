.. _acid:
.. _acid-transactions:
.. _acid-properties:
.. meta::
	:description:
		ACID: ACID is an acronym for the four properties that guarantee reliable database transactions.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ACID
	:twitter:description: ACID: ACID is an acronym for the four properties that guarantee reliable database transactions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: ACID
	:og:type: article
	:og:description: ACID is an acronym for the four properties that guarantee reliable database transactions
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/acid.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/acid.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/acid.ini.html","name":"ACID","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 08:48:12 +0000","dateModified":"Thu, 02 Jul 2026 08:48:12 +0000","description":"ACID is an acronym for the four properties that guarantee reliable database transactions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/ACID.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


ACID
----

ACID is an acronym for the four properties that guarantee reliable database transactions. It stands for Atomicity, Consistency, Isolation, and Durability.

+ Atomicity: a transaction either completes entirely or not at all. If any step fails, all changes are rolled back, leaving the database as if the transaction never started.
+ Consistency: a transaction brings the database from one valid state to another, respecting all defined constraints, rules, and cascades. It cannot leave data in a logically invalid state.
+ Isolation: concurrent transactions execute as if they were serial. The intermediate state of a transaction is not visible to other transactions. The degree of isolation is configurable.
+ Durability: once a transaction is committed, it persists even in the event of a system crash. Achieved through write-ahead logging and durable storage.

ACID transactions are available through PDO via ``beginTransaction()``, ``commit()``, and ``rollBack()``. Most relational databases, MySQL/InnoDB, PostgreSQL, SQLite, provide full ACID compliance.

.. code-block:: php
   
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


`Documentation <https://en.wikipedia.org/wiki/ACID>`__

See also `PDO::beginTransaction <https://www.php.net/manual/en/pdo.begintransaction.php>`_.

Related : :ref:`Database Commit <database-commit>`, :ref:`PHP Data Objects (PDO) <pdo>`, :ref:`Eventual Consistency <eventual-consistency>`, :ref:`Distributed Transactions <distributed-transactions>`, :ref:`WAL <wal>`, :ref:`Transaction <transaction>`
