# Prepared Query
A prepared query is a compiled query, where data are provided as parameters.

Instead of executing the query at once, the query is compiled first, and placeholders are filled later with the actual data. This prevents injections, as the data and the query are separated.

Most PHP DB extensions support prepared statements. Prepared statement may also be available with other systems than SQL databases, such as Gremlin server.
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

## See Also

+ [Prepared Statements (Mysqli)](https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php)
+ [What are prepared statements in PHP?](https://www.educative.io/answers/what-are-prepared-statements-in-php)

Related : [Structured Query Language (SQL)](Structured Query Language (SQL)), [mysqli](mysqli), [SQL Injection](SQL Injection)
