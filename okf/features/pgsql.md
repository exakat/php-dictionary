---
type: "extension"
title: "PostgreSQL"
description: "``pgsql`` is the name of the PHP extension that provides the interface to interact with the PostgreSQL database."
resource: "https://www.php.net/manual/en/book.pgsql.php"
tags: ["database", "extension", "product", "resource"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# PostgreSQL

``pgsql`` is the name of the PHP extension that provides the interface to interact with the PostgreSQL database.

``pgsql`` defines functions, constants and classes. It has been upgraded to use objects instead of resources.

```php
<?php

    // example from the PHP manual : https://www.php.net/manual/en/pgsql.examples-basic.php
    
    // Connecting, selecting database
    $dbconn = pg_connect('host=localhost dbname=publishing user=www password=foo')
        or die('Could not connect: ' . pg_last_error());
    
    // Performing SQL query
    $query = 'SELECT * FROM authors';
    $result = pg_query($dbconn, $query) or die('Query failed: ' . pg_last_error());

?>
```

## Documentation
- [https://www.php.net/manual/en/book.pgsql.php](https://www.php.net/manual/en/book.pgsql.php)

## See Also
- [PostgreSQL homepage](https://www.postgresql.org/)
- [How to Connect PHP and PostgreSQL](https://www.zend.com/blog/php-and-postgresql)
- [How to build an Application with PHP and PostgreSQL](https://dev.to/officialozioma/how-to-build-an-application-with-php-and-postgresql-4iad)

## Related
- [Database](/features/database.md)
- [Structured Query Language (SQL)](/features/sql.md)
- [JavaScript Object Notation (JSON)](/features/json.md)
- [Relational DataBase Management System (RDBMS)](/features/rdbms.md)
- [SQL Database](/features/sql-database.md)

