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

## See Also

+ [Developer Quickstart: PHP mysqli and MariaDB](https://mariadb.com/resources/blog/developer-quickstart-php-mysqli-and-mariadb/)

Related : [MySQL](MySQL), [Database](Database), [Extensions](Extensions), [PHP Data Objects (PDO)](PHP Data Objects (PDO)), [Structured Query Language (SQL)](Structured Query Language (SQL)), [Prepared Query](Prepared Query), [Object API](Object API)
