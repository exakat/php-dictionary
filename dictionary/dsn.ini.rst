.. _dsn:

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
