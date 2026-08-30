---
type: "acronym"
title: "Data Source Name (DSN)"
description: "A DSN is a string that describes a database location and access."
resource: "https://www.php.net/manual/en/pdo.connections.php"
tags: ["acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Data Source Name (DSN)

A DSN is a string that describes a database location and access. 

The format of a DSN is usually specified by the target database. For example: 

+ MySQL: 'mysql:host=localhost;dbname=test'
+ Oracle: 'oci:dbname=//localhost:1521/mydb'
+ PostgreSQL: 'pgsql:host=localhost;port=5432;dbname=testdb;user=bruce;password=mypass'
+ SQLite: 'sqlite:/opt/databases/mydb.sq3'

DSN is closely related to the PDO extension.

```php
<?php

    $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);

?>
```

## Documentation
- [https://www.php.net/manual/en/pdo.connections.php](https://www.php.net/manual/en/pdo.connections.php)

## See Also
- [PDO_MYSQL DSN](https://www.php.net/manual/en/ref.pdo-mysql.connection.php)
- [PDO_PGSQL DSN](https://www.php.net/manual/en/ref.pdo-pgsql.connection.php)
- [PDO_SQLITE DSN](https://www.php.net/manual/en/ref.pdo-sqlite.connection.php)

## Related
- [Configuration](/features/configuration.md)
- [Connection](/features/connection.md)
- [Database](/features/database.md)
- [PHP Data Objects (PDO)](/features/pdo.md)
- [Universal Resource Identifier (URI)](/features/uri.md)

