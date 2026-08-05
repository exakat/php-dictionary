# mysqli
The mysqli extension provide access to MySQL database server, with version 4.1 and above. The mysqli extension has replaced the previous mysql extension: the ``i`` means improved. 

mysqli offers support to OOP and functional API, prepared statement, multiple queries and more. 

mysqli is included in the core distribution since PHP 5.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/mysqli.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/mysqli.ini.html","name":"mysqli","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:40:08 +0000","dateModified":"Sat, 11 Jul 2026 14:40:08 +0000","description":"The mysqli extension provide access to MySQL database server, with version 4","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/mysqli.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
    
    /* Create table doesn't return a resultset */
    $result = $mysqli->query("SELECT * FROM my_table");

?>
```

**[Documentation](https://www.php.net/manual/en/book.mysqli.php)**
## See Also

+ [Developer Quickstart: PHP mysqli and MariaDB](https://mariadb.com/resources/blog/developer-quickstart-php-mysqli-and-mariadb/)

## Related

+ [MySQL](mysql.ini.html)
+ [Database](database.ini.html)
+ [Extensions](extension.ini.html)
+ [PHP Data Objects (PDO)](pdo.ini.html)
+ [Structured Query Language (SQL)](sql.ini.html)
+ [Prepared Query](prepared-query.ini.html)
+ [Object API](object-api.ini.html)
