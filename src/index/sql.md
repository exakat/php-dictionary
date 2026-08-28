# Structured Query Language (SQL)
Structured Query Language, SQL, is a database query language, used to access and update data in a relational database management system.

PHP supports several RDBMS natively, such as: ``Mysql``, ``Oracle``, ``IBM db2``, ``DBA``, ``ODBC``. PHP also offers a database abstraction layer, called PDO.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sql.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sql.html","name":"Structured Query Language (SQL)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Structured Query Language, SQL, is a database query language, used to access and update data in a relational database management system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sql.html"]}],"keywords":["acronym","language"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pdo.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rdbms.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/orm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/active-record.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/prepared-query.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/query.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sqlite3.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sql-database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/graph-database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/n-query.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pgsql.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/star.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escape-character.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mysqli.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/SQL"},{"@type":"CreativeWork","name":"phpMyAdmin","url":"https:\/\/www.phpmyadmin.net\/"},{"@type":"CreativeWork","name":"PHP and SQLite","url":"https:\/\/dev.to\/_russell\/an-introduction-to-php-and-sqlite-2agg"},{"@type":"CreativeWork","name":"PostgreSQL PHP","url":"https:\/\/neon.com\/postgresql\/php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sql"}]}]}</script>
```php
<?php

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli('example.com', 'user', 'password', 'database');
    
    $mysqli->query('DROP TABLE IF EXISTS test');
    $mysqli->query('CREATE TABLE test(id INT)');

?>
```

**[Documentation](https://en.wikipedia.org/wiki/SQL)**
## See Also

+ [phpMyAdmin](https://www.phpmyadmin.net/)
+ [PHP and SQLite](https://dev.to/_russell/an-introduction-to-php-and-sqlite-2agg)
+ [PostgreSQL PHP](https://neon.com/postgresql/php)

## Related

+ [PHP Data Objects (PDO)](pdo.html)
+ [Relational DataBase Management System (RDBMS)](rdbms.html)
+ [Object Relational Mapping (ORM)](orm.html)
+ [Active Record](active-record.html)
+ [Prepared Query](prepared-query.html)
+ [Query](query.html)
+ [SQLite3](sqlite3.html)
+ [SQL Database](sql-database.html)
+ [Graph Database](graph-database.html)
+ [N+1 Query Problem](n-query.html)
+ [PostgreSQL](pgsql.html)
+ [Star \*](star.html)
+ [Escape Character](escape-character.html)
+ [mysqli](mysqli.html)
