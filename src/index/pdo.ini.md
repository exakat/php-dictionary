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
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pdo.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pdo.ini.html","name":"PHP Data Objects (PDO)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"PHP Data Objects, aka PDO, is an interface that abstract access to databases","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/PHP Data Objects (PDO).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php
  $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
?>
```

**[Documentation](https://www.php.net/manual/en/book.pdo.php)**
## Related

+ [Data Source Name (DSN)](dsn.ini.html)
+ [Relational DataBase Management System (RDBMS)](rdbms.ini.html)
+ [Abstraction Layer](abstraction-layer.ini.html)
+ [Data Access Object (DAO)](dao.ini.html)
+ [Resource Leak](resource-leak.ini.html)
+ [Rollback](rollback.ini.html)
+ [Structured Query Language (SQL)](sql.ini.html)
+ [SQLite3](sqlite3.ini.html)
+ [Database Commit](database-commit.ini.html)
+ [mysqli](mysqli.ini.html)
+ [Oracle](oracle.ini.html)
+ [Transaction](transaction.ini.html)
