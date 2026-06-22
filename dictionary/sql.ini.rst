.. _sql:
.. meta::
	:description:
		Structured Query Language (SQL): Structured Query Language, SQL, is a database query language, used to access and update data in a relational database management system.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Structured Query Language (SQL)
	:twitter:description: Structured Query Language (SQL): Structured Query Language, SQL, is a database query language, used to access and update data in a relational database management system
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Structured Query Language (SQL)
	:og:type: article
	:og:description: Structured Query Language, SQL, is a database query language, used to access and update data in a relational database management system
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sql.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Structured Query Language (SQL)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Structured Query Language, SQL, is a database query language, used to access and update data in a relational database management system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Structured Query Language (SQL).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Structured Query Language (SQL)
-------------------------------

Structured Query Language, SQL, is a database query language, used to access and update data in a relational database management system.

PHP supports several RDBMS natively, such as: Mysql, Oracle, IBM db2, DBA, ODBC. PHP also offers a database abstraction layer, called PDO.

.. code-block:: php
   
   <?php
   
       mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
       $mysqli = new mysqli('example.com', 'user', 'password', 'database');
       
       $mysqli->query('DROP TABLE IF EXISTS test');
       $mysqli->query('CREATE TABLE test(id INT)');
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/SQL>`__

See also `phpMyAdmin <https://www.phpmyadmin.net/>`_, `PHP and SQLite <https://dev.to/_russell/an-introduction-to-php-and-sqlite-2agg>`_ and `PostgreSQL PHP <https://neon.com/postgresql/php>`_.

Related : :ref:`PHP Data Objects (PDO) <pdo>`, :ref:`Relational DataBase Management System (RDBMS) <rdbms>`, :ref:`Object Relational Mapping (ORM) <orm>`, :ref:`Active Record <active-record>`, :ref:`Prepared Query <prepared-query>`, :ref:`Query <query>`, :ref:`SQLite3 <sqlite3>`, :ref:`SQL Database <sql-database>`, :ref:`Graph Database <graph-database>`, :ref:`N+1 Query Problem <n-query>`, :ref:`PostgreSQL <pgsql>`, :ref:`Star * <star>`, :ref:`Escape Character <escape-character>`, :ref:`mysqli <mysqli>`
