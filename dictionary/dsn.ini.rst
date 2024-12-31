.. _dsn:
.. meta::
	:description:
		Data Source Name (DSN): A DSN is a string that describes a database location and access.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Data Source Name (DSN)
	:twitter:description: Data Source Name (DSN): A DSN is a string that describes a database location and access
	:twitter:creator: @exakat
	:og:title: Data Source Name (DSN)
	:og:type: article
	:og:description: A DSN is a string that describes a database location and access
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dsn.ini.html
	:og:locale: en


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
