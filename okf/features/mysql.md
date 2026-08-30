---
type: "extension"
title: "MySQL"
description: "``mysql`` is both the name of a PHP extension that provides the interface to interact with the MySQL database, and the database itself."
resource: "https://www.php.net/manual/en/book.mysql.php"
tags: ["database", "extension", "product"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# MySQL

``mysql`` is both the name of a PHP extension that provides the interface to interact with the MySQL database, and the database itself. ``mysql`` is also known as ``mysqli``, as the original PHP extension has been improved, over the years. All three names may be interchangeable, depending on the context.

``mysqli`` defines functions, constants and classes. It has been upgraded to use objects instead of resources.

``mysql`` also applies to ``MariaDB``, which is a drop-in replacement of ``MySQL``.

```php
<?php

    // Connecting, selecting database
    $link = mysql_connect('mysql_host', 'mysql_user', 'mysql_password')
        or die('Could not connect: ' . mysql_error());
    echo 'Connected successfully';
    mysql_select_db('my_database') or die('Could not select database');
    
    // Performing SQL query
    $query = 'SELECT * FROM my_table';
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    
    // Printing results in HTML
    echo "<table>\n";
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
        echo "\t<tr>\n";
        foreach ($line as $col_value) {
            echo "\t\t<td>$col_value</td>\n";
        }
        echo "\t</tr>\n";
    }
    echo "</table>\n";
    
    // Free resultset
    mysql_free_result($result);
    
    // Closing connection
    mysql_close($link);

?>
```

## Documentation
- [https://www.php.net/manual/en/book.mysql.php](https://www.php.net/manual/en/book.mysql.php)

## See Also
- [MySQL home](https://www.mysql.org)
- [MariaDB home](https://mariadb.org/)
- [An Introduction to PHP and MySQL(Inserting and Fetching from MySQL)](https://medium.com/@barbiedisemyworld/an-introduction-to-php-and-mysql-inserting-and-fetching-from-mysql-fe16261f3228)

## Related
- [mysqli](/features/mysqli.md)
- [Graph Database](/features/graph-database.md)
- [Oracle](/features/oracle.md)
- [Relational DataBase Management System (RDBMS)](/features/rdbms.md)
- [SQL Database](/features/sql-database.md)
- [Linux Apache Mysql PHP (LAMP)](/features/lamp.md)
- [Linux Nginx Mysql PHP (LEMP)](/features/lemp.md)

