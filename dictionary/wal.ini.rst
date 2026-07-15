.. _wal:
.. _write-ahead-logging:
.. _write-ahead-log:
.. meta::
	:description:
		WAL: Write-Ahead Logging, also called WAL, is a standard technique for ensuring data integrity in databases.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: WAL
	:twitter:description: WAL: Write-Ahead Logging, also called WAL, is a standard technique for ensuring data integrity in databases
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: WAL
	:og:type: article
	:og:description: Write-Ahead Logging, also called WAL, is a standard technique for ensuring data integrity in databases
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/wal.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/wal.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/wal.ini.html","name":"WAL","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 09:05:15 +0000","dateModified":"Thu, 02 Jul 2026 09:05:15 +0000","description":"Write-Ahead Logging, also called WAL, is a standard technique for ensuring data integrity in databases","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/WAL.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


WAL
---

Write-Ahead Logging, also called WAL, is a standard technique for ensuring data integrity in databases. Before modifying data pages on disk, the database first appends a record of the change to a durable sequential log. If a crash occurs mid-transaction, the database replays the log at startup to reach a consistent state.

WAL is the durability mechanism behind ACID transactions in PostgreSQL, SQLite with its WAL journal mode, and MySQL/InnoDB, with its redo log. It also enables streaming replication: replicas consume the primary's WAL stream to stay in sync.

PHP applications interact with WAL indirectly through PDO or MySQLi. SQLite's WAL mode can be activated explicitly and improves read concurrency because readers no longer block writers.

.. code-block:: php
   
   <?php
   
       // Enable WAL journal mode in SQLite for better read concurrency
       $pdo = new PDO('sqlite:/var/db/app.db');
       $pdo->exec('PRAGMA journal_mode=WAL');
       
       $mode = $pdo->query('PRAGMA journal_mode')->fetchColumn();
       echo $mode; // 'wal'
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Write-ahead_logging>`__

See also `SQLite WAL mode <https://www.sqlite.org/wal.html>`_ and `PostgreSQL WAL introduction <https://www.postgresql.org/docs/current/wal-intro.html>`_.

Related : :ref:`ACID <acid>`, :ref:`Transaction <transaction>`, :ref:`Database Commit <database-commit>`, :ref:`Rollback <rollback>`, :ref:`PHP Data Objects (PDO) <pdo>`, :ref:`Distributed Transactions <distributed-transactions>`, :ref:`Eventual Consistency <eventual-consistency>`
