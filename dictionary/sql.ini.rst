.. _sql:
.. meta::
	:description:
		Simple Query Language (SQL): Simple Query Language is a database query language, use to access and update data in a a relational database management system (RDBMS).
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Simple Query Language (SQL)
	:twitter:description: Simple Query Language (SQL): Simple Query Language is a database query language, use to access and update data in a a relational database management system (RDBMS)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Simple Query Language (SQL)
	:og:type: article
	:og:description: Simple Query Language is a database query language, use to access and update data in a a relational database management system (RDBMS)
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sql.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Simple Query Language (SQL)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"Simple Query Language is a database query language, use to access and update data in a a relational database management system (RDBMS)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Simple Query Language (SQL).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Simple Query Language (SQL)
---------------------------

Simple Query Language is a database query language, use to access and update data in a a relational database management system (RDBMS).

PHP supports several RDBMS natively, such as : Mysql, Oracle, IBM db2, DBA, ODBC. PHP also offers a database abstraction layer, called PDO. 


.. code-block:: php
   
   <?php
   
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
   $mysqli = new mysqli("example.com", "user", "password", "database");
   
   $mysqli->query("DROP TABLE IF EXISTS test");
   $mysqli->query("CREATE TABLE test(id INT)");
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/SQL>`__

Related : :ref:`PHP Data Objects (PDO) <pdo>`, :ref:`RDBMS <rdbms>`, :ref:`Object Relational Mapping (ORM) <orm>`, :ref:`Active Record <active-record>`, :ref:`Prepared Query <prepared-query>`, :ref:`Query <query>`, :ref:`Sqlite3 <sqlite3>`
