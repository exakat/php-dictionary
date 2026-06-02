.. _transaction:
.. meta::
	:description:
		Transaction: A transaction is a sequence of database operations that is treated as a single atomic unit.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Transaction
	:twitter:description: Transaction: A transaction is a sequence of database operations that is treated as a single atomic unit
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Transaction
	:og:type: article
	:og:description: A transaction is a sequence of database operations that is treated as a single atomic unit
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/transaction.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Transaction","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 02 Jun 2026 16:27:11 +0000","dateModified":"Tue, 02 Jun 2026 16:27:11 +0000","description":"A transaction is a sequence of database operations that is treated as a single atomic unit","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Transaction.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Transaction
-----------

A transaction is a sequence of database operations that is treated as a single atomic unit. Either all operations succeed and are committed together, or any failure causes all of them to be rolled back, leaving the database unchanged.

Transactions follow the ACID properties: Atomicity, Consistency, Isolation, and Durability.

Transactions are most commonly used through PDO or database-specific extensions. An explicit transaction starts with ``beginTransaction()``, ends with ``commit()``, and is undone with ``rollBack()``.

ORMs such as Doctrine and Eloquent also expose transaction helpers and often wrap operations automatically.

.. code-block:: php
   
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


`Documentation <https://www.php.net/manual/en/pdo.transactions.php>`__

See also `ACID <https://en.wikipedia.org/wiki/ACID>`_ and `PDO Transactions and auto-commit <https://www.php.net/manual/en/pdo.transactions.php>`_.

Related : :ref:`PHP Data Objects (PDO) <pdo>`, :ref:`Database <database>`, :ref:`Exception <exception>`, :ref:`Try-catch <try>`, :ref:`Rollback <rollback>`
