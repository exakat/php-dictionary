# SQLite3
SQLite is a C-language library that implements a small, fast, self-contained, high-reliability, full-featured, SQL database engine.

The related extension is SQLite3. It allows the creation and usage of file-based or memory-based databases.

SQLite3 is also available with PDO, with the ``pdo_sqlite`` engine.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sqlite3.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sqlite3.html","name":"SQLite3","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 08:20:08 +0000","dateModified":"Thu, 02 Jul 2026 08:20:08 +0000","description":"SQLite is a C-language library that implements a small, fast, self-contained, high-reliability, full-featured, SQL database engine","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/SQLite3.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sqlite3"}]}]}</script>
```php
<?php

    $db = new SQLite3('my.sqlite3');
    
    $results = $db->query('SELECT bar FROM foo');
    while ($row = $results->fetchArray()) {
        var_dump($row);
    }

?>
```

**[Documentation](https://www.sqlite.org/index.html)**
## See Also

+ [SQLite3 in PHP](https://www.php.net/sqlite3)
+ [How to Store Images in SQLite with PHP](https://www.twilio.com/en-us/blog/developers/tutorials/building-blocks/store-images-sqlite-php)

## Related

+ [Structured Query Language (SQL)](sql.html)
+ [SQL Database](sql-database.html)
+ [PHP Data Objects (PDO)](pdo.html)
+ [Relational DataBase Management System (RDBMS)](rdbms.html)
