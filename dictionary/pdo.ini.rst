.. _pdo:
.. meta::
	:description:
		PHP Data Objects (PDO): PHP Data Objects (PDO) is an interface that abstract access to databases.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PHP Data Objects (PDO)
	:twitter:description: PHP Data Objects (PDO): PHP Data Objects (PDO) is an interface that abstract access to databases
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: PHP Data Objects (PDO)
	:og:type: article
	:og:description: PHP Data Objects (PDO) is an interface that abstract access to databases
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pdo.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"PHP Data Objects (PDO)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:53:06 +0000","dateModified":"Wed, 21 Jan 2026 08:53:06 +0000","description":"PHP Data Objects (PDO) is an interface that abstract access to databases","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/PHP Data Objects (PDO).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


PHP Data Objects (PDO)
----------------------

PHP Data Objects (PDO) is an interface that abstract access to databases. The same interface may be used to access different databases. 

PDO may access 10 different databases : 

+ CUBRID
+ MS SQL Server
+ Firebird
+ IBM
+ Informix
+ MySQL
+ MS SQL Server
+ Oracle
+ ODBC and DB2
+ PostgreSQL
+ SQLite 2 and 3

The different access relies on drivers and DSN to connect to a database. The DSN describes the server to reach, and the driver handles the communication protocol.

.. code-block:: php
   
   <?php
     $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
   ?>


`Documentation <https://www.php.net/manual/en/intro.pdo.php>`__

Related : :ref:`Data Source Name (DSN) <dsn>`, :ref:`Relational DataBase Management System (RDBMS) <rdbms>`, :ref:`Abstraction Layer <abstraction-layer>`, :ref:`Data Access Object (DAO) <dao>`
