.. _sql:

Simple Query Language (SQL)
---------------------------

Simple Query Language is a database query language, use to access and update data in a a relational database management system (RDBMS).

PHP supports several rdbms natively, such as : Mysql, Oracle, IBM db2, DBA, ODBC. PHP also offers a database abstraction layer, called PDO. 


.. code-block:: php
   
   <?php
   
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
   $mysqli = new mysqli("example.com", "user", "password", "database");
   
   $mysqli->query("DROP TABLE IF EXISTS test");
   $mysqli->query("CREATE TABLE test(id INT)");
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/SQL>`__

Related : :ref:`PHP Data Objects (PDO) <pdo>`
