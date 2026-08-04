# Structured Query Language (SQL)
Structured Query Language, SQL, is a database query language, used to access and update data in a relational database management system.

PHP supports several RDBMS natively, such as: ``Mysql``, ``Oracle``, ``IBM db2``, ``DBA``, ``ODBC``. PHP also offers a database abstraction layer, called PDO.
```php
<?php

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli('example.com', 'user', 'password', 'database');
    
    $mysqli->query('DROP TABLE IF EXISTS test');
    $mysqli->query('CREATE TABLE test(id INT)');

?>
```

## See Also

+ [phpMyAdmin](https://www.phpmyadmin.net/)
+ [PHP and SQLite](https://dev.to/_russell/an-introduction-to-php-and-sqlite-2agg)
+ [PostgreSQL PHP](https://neon.com/postgresql/php)

Related : [PHP Data Objects (PDO)](PHP Data Objects (PDO)), [Relational DataBase Management System (RDBMS)](Relational DataBase Management System (RDBMS)), [Object Relational Mapping (ORM)](Object Relational Mapping (ORM)), [Active Record](Active Record), [Prepared Query](Prepared Query), [Query](Query), [SQLite3](SQLite3), [SQL Database](SQL Database), [Graph Database](Graph Database), [N+1 Query Problem](N+1 Query Problem), [PostgreSQL](PostgreSQL), [Star *](Star *), [Escape Character](Escape Character), [mysqli](mysqli)
