# Structured Query Language (SQL)
Structured Query Language, SQL, is a database query language, used to access and update data in a relational database management system.

PHP supports several RDBMS natively, such as: ``Mysql``, ``Oracle``, ``IBM db2``, ``DBA``, ``ODBC``. PHP also offers a database abstraction layer, called PDO.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sql.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sql.html","name":"Structured Query Language (SQL)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:17:20 +0000","dateModified":"Mon, 06 Jul 2026 10:17:20 +0000","description":"Structured Query Language, SQL, is a database query language, used to access and update data in a relational database management system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Structured Query Language (SQL).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli('example.com', 'user', 'password', 'database');
    
    $mysqli->query('DROP TABLE IF EXISTS test');
    $mysqli->query('CREATE TABLE test(id INT)');

?>
```

**[Documentation](https://en.wikipedia.org/wiki/SQL)**
## See Also

+ [phpMyAdmin](https://www.phpmyadmin.net/)
+ [PHP and SQLite](https://dev.to/_russell/an-introduction-to-php-and-sqlite-2agg)
+ [PostgreSQL PHP](https://neon.com/postgresql/php)

## Related

+ [PHP Data Objects (PDO)](pdo.ini.html)
+ [Relational DataBase Management System (RDBMS)](rdbms.ini.html)
+ [Object Relational Mapping (ORM)](orm.ini.html)
+ [Active Record](active-record.ini.html)
+ [Prepared Query](prepared-query.ini.html)
+ [Query](query.ini.html)
+ [SQLite3](sqlite3.ini.html)
+ [SQL Database](sql-database.ini.html)
+ [Graph Database](graph-database.ini.html)
+ [N+1 Query Problem](n-query.ini.html)
+ [PostgreSQL](pgsql.ini.html)
+ [Star \*](star.ini.html)
+ [Escape Character](escape-character.ini.html)
+ [mysqli](mysqli.ini.html)
