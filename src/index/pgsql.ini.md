# PostgreSQL
``pgsql`` is the name of the PHP extension that provides the interface to interact with the PostgreSQL database.

``pgsql`` defines functions, constants and classes. It has been upgraded to use objects instead of resources.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pgsql.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pgsql.ini.html","name":"PostgreSQL","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``pgsql`` is the name of the PHP extension that provides the interface to interact with the PostgreSQL database","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/PostgreSQL.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // example from the PHP manual : https://www.php.net/manual/en/pgsql.examples-basic.php
    
    // Connecting, selecting database
    $dbconn = pg_connect('host=localhost dbname=publishing user=www password=foo')
        or die('Could not connect: ' . pg_last_error());
    
    // Performing SQL query
    $query = 'SELECT * FROM authors';
    $result = pg_query($dbconn, $query) or die('Query failed: ' . pg_last_error());

?>
```

**[Documentation](https://www.php.net/manual/en/book.pgsql.php)**
## See Also

+ [PostgreSQL homepage](https://www.postgresql.org/)
+ [How to Connect PHP and PostgreSQL](https://www.zend.com/blog/php-and-postgresql)
+ [How to build an Application with PHP and PostgreSQL](https://dev.to/officialozioma/how-to-build-an-application-with-php-and-postgresql-4iad)

## Related

+ [Database](database.ini.html)
+ [Structured Query Language (SQL)](sql.ini.html)
+ [JavaScript Object Notation (JSON)](json.ini.html)
+ [Relational DataBase Management System (RDBMS)](rdbms.ini.html)
+ [SQL Database](sql-database.ini.html)
