---
type: "acronym"
title: "Structured Query Language (SQL)"
description: "Structured Query Language, SQL, is a database query language, used to access and update data in a relational database management system."
resource: "https://en.wikipedia.org/wiki/SQL"
tags: ["acronym", "language"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://en.wikipedia.org/wiki/SQL](https://en.wikipedia.org/wiki/SQL)

## See Also
- [phpMyAdmin](https://www.phpmyadmin.net/)
- [PHP and SQLite](https://dev.to/_russell/an-introduction-to-php-and-sqlite-2agg)
- [PostgreSQL PHP](https://neon.com/postgresql/php)

## Related
- [PHP Data Objects (PDO)](/features/pdo.md)
- [Relational DataBase Management System (RDBMS)](/features/rdbms.md)
- [Object Relational Mapping (ORM)](/features/orm.md)
- [Active Record](/features/active-record.md)
- [Prepared Query](/features/prepared-query.md)
- [Query](/features/query.md)
- [SQLite3](/features/sqlite3.md)
- [SQL Database](/features/sql-database.md)
- [Graph Database](/features/graph-database.md)
- [N+1 Query Problem](/features/n-query.md)
- [PostgreSQL](/features/pgsql.md)
- [Star *](/features/star.md)
- [Escape Character](/features/escape-character.md)
- [mysqli](/features/mysqli.md)

