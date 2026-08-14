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
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pdo.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pdo.html","name":"PHP Data Objects (PDO)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 09:19:27 +0000","dateModified":"Fri, 14 Aug 2026 09:19:27 +0000","description":"PHP Data Objects, aka PDO, is an interface that abstract access to databases","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/PHP Data Objects (PDO).html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"pdo"}]}]}</script>
```php
<?php
  $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
?>
```

**[Documentation](https://www.php.net/manual/en/book.pdo.php)**
## Related

+ [Data Source Name (DSN)](dsn.html)
+ [Relational DataBase Management System (RDBMS)](rdbms.html)
+ [Abstraction Layer](abstraction-layer.html)
+ [Data Access Object (DAO)](dao.html)
+ [Resource Leak](resource-leak.html)
+ [Rollback](rollback.html)
+ [Structured Query Language (SQL)](sql.html)
+ [SQLite3](sqlite3.html)
+ [Database Commit](database-commit.html)
+ [mysqli](mysqli.html)
+ [Oracle](oracle.html)
+ [Transaction](transaction.html)
+ [Connection Pool](connection-pool.html)
