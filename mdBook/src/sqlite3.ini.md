# SQLite3
SQLite is a C-language library that implements a small, fast, self-contained, high-reliability, full-featured, SQL database engine.

The related extension is SQLite3. It allows the creation and usage of file-based or memory-based databases.

SQLite3 is also available with PDO, with the ``pdo_sqlite`` engine.
```php
<?php

    $db = new SQLite3('my.sqlite3');
    
    $results = $db->query('SELECT bar FROM foo');
    while ($row = $results->fetchArray()) {
        var_dump($row);
    }

?>
```

## See Also

+ [SQLite3 in PHP](https://www.php.net/sqlite3)
+ [How to Store Images in SQLite with PHP](https://www.twilio.com/en-us/blog/developers/tutorials/building-blocks/store-images-sqlite-php)

Related : [Structured Query Language (SQL)](Structured Query Language (SQL)), [SQL Database](SQL Database), [PHP Data Objects (PDO)](PHP Data Objects (PDO)), [Relational DataBase Management System (RDBMS)](Relational DataBase Management System (RDBMS))
