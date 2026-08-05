# SQL Injection
A SQL injection is a vulnerability, where external data are used to change the behavior of a SQL query. 

In the example below, ``$_GET`` are directly used inside the query. By using a clever string, as shown in comment, it is possible to bypass the whole condition and get access to any user. 

Among the solutions to mitigate this problem: filter adequately the incoming data; use prepared statements.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sql-injection.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sql-injection.ini.html","name":"SQL Injection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A SQL injection is a vulnerability, where external data are used to change the behavior of a SQL query","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/SQL Injection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // $_GET['name'] = ' OR 1 = 1 OR ';
    $SQL_query = "SELECT * FROM users WHERE name=" . $_GET['name'] . " AND password=" . $_GET['pass'] . "";

    $connexion->query($SQL_query);

?>
```

**[Documentation](https://www.php.net/manual/en/security.database.sql-injection.php)**
## See Also

+ [SQL Injection in PHP Web Applications](https://brightsec.com/blog/php-sql-injection/)
+ [What is SQL injection and how to prevent it?](https://docs.php.earth/security/sql-injection/)

## Related

+ [Semicolon ;](semicolon.ini.html)
+ [Prepared Query](prepared-query.ini.html)
+ [Injection](injection.ini.html)
+ [Static Application Security Testing (SAST)](sast.ini.html)
+ [Second Order SQL Injection](second-order-sql-injection.ini.html)
