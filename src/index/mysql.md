# MySQL
``mysql`` is both the name of a PHP extension that provides the interface to interact with the MySQL database, and the database itself. ``mysql`` is also known as ``mysqli``, as the original PHP extension has been improved, over the years. All three names may be interchangeable, depending on the context.

``mysqli`` defines functions, constants and classes. It has been upgraded to use objects instead of resources.

``mysql`` also applies to ``MariaDB``, which is a drop-in replacement of ``MySQL``.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mysql.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mysql.html","name":"MySQL","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"mysql is both the name of a PHP extension that provides the interface to interact with the MySQL database, and the database itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mysql.html"]}],"keywords":["database","extension","product"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mysqli.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/graph-database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/oracle.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rdbms.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sql-database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lamp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lemp.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.mysql.php"},{"@type":"CreativeWork","name":"MySQL home","url":"https:\/\/www.mysql.org"},{"@type":"CreativeWork","name":"MariaDB home","url":"https:\/\/mariadb.org\/"},{"@type":"CreativeWork","name":"An Introduction to PHP and MySQL(Inserting and Fetching from MySQL)","url":"https:\/\/medium.com\/@barbiedisemyworld\/an-introduction-to-php-and-mysql-inserting-and-fetching-from-mysql-fe16261f3228"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"mysql"}]}]}</script>
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

**[Documentation](https://www.php.net/manual/en/book.mysql.php)**
## See Also

+ [MySQL home](https://www.mysql.org)
+ [MariaDB home](https://mariadb.org/)
+ [An Introduction to PHP and MySQL(Inserting and Fetching from MySQL)](https://medium.com/@barbiedisemyworld/an-introduction-to-php-and-mysql-inserting-and-fetching-from-mysql-fe16261f3228)

## Related

+ [mysqli](mysqli.html)
+ [Graph Database](graph-database.html)
+ [Oracle](oracle.html)
+ [Relational DataBase Management System (RDBMS)](rdbms.html)
+ [SQL Database](sql-database.html)
+ [Linux Apache Mysql PHP (LAMP)](lamp.html)
+ [Linux Nginx Mysql PHP (LEMP)](lemp.html)
