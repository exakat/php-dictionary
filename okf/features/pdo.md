---
type: "extension"
title: "PHP Data Objects (PDO)"
description: "PHP Data Objects, aka PDO, is an interface that abstract access to databases."
resource: "https://www.php.net/manual/en/book.pdo.php"
tags: ["extension", "acronym", "dbal"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/book.pdo.php](https://www.php.net/manual/en/book.pdo.php)

## See Also

## Related
- [Data Source Name (DSN)](/features/dsn.md)
- [Relational DataBase Management System (RDBMS)](/features/rdbms.md)
- [Abstraction Layer](/features/abstraction-layer.md)
- [Data Access Object (DAO)](/features/dao.md)
- [Resource Leak](/features/resource-leak.md)
- [Rollback](/features/rollback.md)
- [Structured Query Language (SQL)](/features/sql.md)
- [SQLite3](/features/sqlite3.md)
- [Database Commit](/features/database-commit.md)
- [mysqli](/features/mysqli.md)
- [Oracle](/features/oracle.md)
- [Transaction](/features/transaction.md)
- [Connection Pool](/features/connection-pool.md)

