# SQL Injection
A SQL injection is a vulnerability, where external data are used to change the behavior of a SQL query. 

In the example below, ``$_GET`` are directly used inside the query. By using a clever string, as shown in comment, it is possible to bypass the whole condition and get access to any user. 

Among the solutions to mitigate this problem: filter adequately the incoming data; use prepared statements.
```php
<?php

    // $_GET['name'] = ' OR 1 = 1 OR ';
    $SQL_query = "SELECT * FROM users WHERE name=" . $_GET['name'] . " AND password=" . $_GET['pass'] . "";

    $connexion->query($SQL_query);

?>
```

## See Also

+ [SQL Injection in PHP Web Applications](https://brightsec.com/blog/php-sql-injection/)
+ [What is SQL injection and how to prevent it?](https://docs.php.earth/security/sql-injection/)

Related : [Semicolon ;](Semicolon ;), [Prepared Query](Prepared Query), [Injection](Injection), [Static Application Security Testing (SAST)](Static Application Security Testing (SAST)), [Second Order SQL Injection](Second Order SQL Injection)
