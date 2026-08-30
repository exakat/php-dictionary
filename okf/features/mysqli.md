---
type: "extension"
title: "mysqli"
description: "The mysqli extension provide access to MySQL database server, with version 4.1 and above."
resource: "https://www.php.net/manual/en/book.mysqli.php"
tags: ["product", "extension"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# mysqli

The mysqli extension provide access to MySQL database server, with version 4.1 and above. The mysqli extension has replaced the previous mysql extension: the ``i`` means improved. 

mysqli offers support to OOP and functional API, prepared statement, multiple queries and more. 

mysqli is included in the core distribution since PHP 5.

```php
<?php

    $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
    
    /* Create table doesn't return a resultset */
    $result = $mysqli->query("SELECT * FROM my_table");

?>
```

## Documentation
- [https://www.php.net/manual/en/book.mysqli.php](https://www.php.net/manual/en/book.mysqli.php)

## See Also
- [Developer Quickstart: PHP mysqli and MariaDB](https://mariadb.com/resources/blog/developer-quickstart-php-mysqli-and-mariadb/)

## Related
- [MySQL](/features/mysql.md)
- [Database](/features/database.md)
- [Extensions](/features/extension.md)
- [PHP Data Objects (PDO)](/features/pdo.md)
- [Structured Query Language (SQL)](/features/sql.md)
- [Prepared Query](/features/prepared-query.md)
- [Object API](/features/object-api.md)

