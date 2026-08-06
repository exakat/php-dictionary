# Prepared Query
A prepared query is a compiled query, where data are provided as parameters.

Instead of executing the query at once, the query is compiled first, and placeholders are filled later with the actual data. This prevents injections, as the data and the query are separated.

Most PHP DB extensions support prepared statements. Prepared statement may also be available with other systems than SQL databases, such as Gremlin server.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/prepared-query.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/prepared-query.html","name":"Prepared Query","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A prepared query is a compiled query, where data are provided as parameters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Prepared Query.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Example from PHP manual
    /* Execute a prepared statement by passing an array of values */
    $sth = $dbh->prepare('SELECT name, colour, calories
        FROM fruit
        WHERE calories < ? AND colour = ?');
    $sth->execute([150, 'red']);
    $red = $sth->fetchAll();
    $sth->execute([175, 'yellow']);
    $yellow = $sth->fetchAll();

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Prepared_statement)**
## See Also

+ [Prepared Statements (Mysqli)](https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php)
+ [What are prepared statements in PHP?](https://www.educative.io/answers/what-are-prepared-statements-in-php)

## Related

+ [Structured Query Language (SQL)](sql.ini.html)
+ [mysqli](mysqli.ini.html)
+ [SQL Injection](sql-injection.ini.html)
