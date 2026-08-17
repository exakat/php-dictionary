# mysqli
The mysqli extension provide access to MySQL database server, with version 4.1 and above. The mysqli extension has replaced the previous mysql extension: the ``i`` means improved. 

mysqli offers support to OOP and functional API, prepared statement, multiple queries and more. 

mysqli is included in the core distribution since PHP 5.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mysqli.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mysqli.html","name":"mysqli","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:40:08 +0000","dateModified":"Sat, 11 Jul 2026 14:40:08 +0000","description":"The mysqli extension provide access to MySQL database server, with version 4","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mysqli.html"]}],"keywords":["product","extension"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mysql.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/extension.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pdo.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sql.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/prepared-query.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-api.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.mysqli.php"},{"@type":"CreativeWork","name":"Developer Quickstart: PHP mysqli and MariaDB","url":"https:\/\/mariadb.com\/resources\/blog\/developer-quickstart-php-mysqli-and-mariadb\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"mysqli"}]}]}</script>
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

+ [MySQL](mysql.html)
+ [Database](database.html)
+ [Extensions](extension.html)
+ [PHP Data Objects (PDO)](pdo.html)
+ [Structured Query Language (SQL)](sql.html)
+ [Prepared Query](prepared-query.html)
+ [Object API](object-api.html)
