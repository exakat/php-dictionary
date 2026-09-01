# SQLite3
SQLite is a C-language library that implements a small, fast, self-contained, high-reliability, full-featured, SQL database engine.

The related extension is ``SQLite3``. It allows the creation and usage of file-based or memory-based databases.

``SQLite3`` is also available with PDO, with the ``pdo_sqlite`` engine.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sqlite3.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sqlite3.html","name":"SQLite3","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 28 Aug 2026 10:32:20 +0000","dateModified":"Fri, 28 Aug 2026 10:32:20 +0000","description":"SQLite is a C-language library that implements a small, fast, self-contained, high-reliability, full-featured, SQL database engine","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sqlite3.html"]}],"alternateName":["sqlite"],"keywords":["product"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sql.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sql-database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pdo.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rdbms.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.sqlite.org\/index.html"},{"@type":"CreativeWork","name":"SQLite3 in PHP","url":"https:\/\/www.php.net\/sqlite3"},{"@type":"CreativeWork","name":"How to Store Images in SQLite with PHP","url":"https:\/\/www.twilio.com\/en-us\/blog\/developers\/tutorials\/building-blocks\/store-images-sqlite-php"},{"@type":"CreativeWork","name":"SQLite for everything","url":"https:\/\/joecode.com\/2026-08-19-sqlite3\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sqlite3"}]}]}</script>
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
+ [SQLite for everything](https://joecode.com/2026-08-19-sqlite3/)

## Related

+ [Structured Query Language (SQL)](sql.html)
+ [SQL Database](sql-database.html)
+ [PHP Data Objects (PDO)](pdo.html)
+ [Relational DataBase Management System (RDBMS)](rdbms.html)
