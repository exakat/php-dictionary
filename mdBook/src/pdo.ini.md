# PHP Data Objects (PDO)
PHP Data Objects, aka PDO, is an interface that abstract access to databases. The same interface may be used to access different databases. 

PDO provides access 10 different databases: 

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
```php
<?php
  $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
?>
```

Related : [Data Source Name (DSN)](Data Source Name (DSN)), [Relational DataBase Management System (RDBMS)](Relational DataBase Management System (RDBMS)), [Abstraction Layer](Abstraction Layer), [Data Access Object (DAO)](Data Access Object (DAO)), [Resource Leak](Resource Leak), [Rollback](Rollback), [Structured Query Language (SQL)](Structured Query Language (SQL)), [SQLite3](SQLite3), [Database Commit](Database Commit), [mysqli](mysqli), [Oracle](Oracle), [Transaction](Transaction)
