.. _dsn:
.. meta::
	:description:
		Data Source Name (DSN): A DSN is a string that describes a database location and access.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Data Source Name (DSN)
	:twitter:description: Data Source Name (DSN): A DSN is a string that describes a database location and access
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Data Source Name (DSN)
	:og:type: article
	:og:description: A DSN is a string that describes a database location and access
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dsn.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Data Source Name (DSN)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"A DSN is a string that describes a database location and access","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Data Source Name (DSN).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Data Source Name (DSN)
----------------------

A DSN is a string that describes a database location and access. 

The format of a DSN is usually specified by the target database. For example : 

+ MySQL: 'mysql:host=localhost;dbname=test'
+ Oracle: 'oci:dbname=//localhost:1521/mydb'
+ PostGreSQL: 'pgsql:host=localhost;port=5432;dbname=testdb;user=bruce;password=mypass'
+ SQLite: 'sqlite:/opt/databases/mydb.sq3'

DSN is closely related to the PDO extension.



.. code-block:: php
   
   <?php
   $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
   ?>
   


`Documentation <https://www.php.net/manual/en/pdo.connections.php>`__
