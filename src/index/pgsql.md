# PostgreSQL
``pgsql`` is the name of the PHP extension that provides the interface to interact with the PostgreSQL database.

``pgsql`` defines functions, constants and classes. It has been upgraded to use objects instead of resources.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pgsql.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pgsql.html","name":"PostgreSQL","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"pgsql is the name of the PHP extension that provides the interface to interact with the PostgreSQL database","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pgsql.html"]}],"alternateName":["postgresql"],"keywords":["database","extension","product","resource"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sql.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rdbms.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sql-database.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.pgsql.php"},{"@type":"CreativeWork","name":"PostgreSQL homepage","url":"https:\/\/www.postgresql.org\/"},{"@type":"CreativeWork","name":"How to Connect PHP and PostgreSQL","url":"https:\/\/www.zend.com\/blog\/php-and-postgresql"},{"@type":"CreativeWork","name":"How to build an Application with PHP and PostgreSQL","url":"https:\/\/dev.to\/officialozioma\/how-to-build-an-application-with-php-and-postgresql-4iad"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"pgsql"}]}]}</script>
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

+ [Database](database.html)
+ [Structured Query Language (SQL)](sql.html)
+ [JavaScript Object Notation (JSON)](json.html)
+ [Relational DataBase Management System (RDBMS)](rdbms.html)
+ [SQL Database](sql-database.html)
