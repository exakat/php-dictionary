---
type: "PHP Feature"
title: "SQLite3"
description: "SQLite is a C-language library that implements a small, fast, self-contained, high-reliability, full-featured, SQL database engine."
resource: "https://www.sqlite.org/index.html"
tags: ["product"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# SQLite3

SQLite is a C-language library that implements a small, fast, self-contained, high-reliability, full-featured, SQL database engine.

The related extension is ``SQLite3``. It allows the creation and usage of file-based or memory-based databases.

``SQLite3`` is also available with PDO, with the ``pdo_sqlite`` engine.

```php
<?php

    $db = new SQLite3('my.sqlite3');
    
    $results = $db->query('SELECT bar FROM foo');
    while ($row = $results->fetchArray()) {
        var_dump($row);
    }

?>
```

## Documentation
- [https://www.sqlite.org/index.html](https://www.sqlite.org/index.html)

## See Also
- [SQLite3 in PHP](https://www.php.net/sqlite3)
- [How to Store Images in SQLite with PHP](https://www.twilio.com/en-us/blog/developers/tutorials/building-blocks/store-images-sqlite-php)
- [SQLite for everything](https://joecode.com/2026-08-19-sqlite3/)

## Related
- [Structured Query Language (SQL)](/features/sql.md)
- [SQL Database](/features/sql-database.md)
- [PHP Data Objects (PDO)](/features/pdo.md)
- [Relational DataBase Management System (RDBMS)](/features/rdbms.md)

## Details
- Extension: ext-sqlite3
- Extension: ext-pdo_sqlite3

