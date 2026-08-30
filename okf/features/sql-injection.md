---
type: "PHP Feature"
title: "SQL Injection"
description: "A SQL injection is a vulnerability, where external data are used to change the behavior of a SQL query."
resource: "https://www.php.net/manual/en/security.database.sql-injection.php"
tags: ["security"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/security.database.sql-injection.php](https://www.php.net/manual/en/security.database.sql-injection.php)

## See Also
- [SQL Injection in PHP Web Applications](https://brightsec.com/blog/php-sql-injection/)
- [What is SQL injection and how to prevent it?](https://docs.php.earth/security/sql-injection/)

## Related
- [Semicolon ;](/features/semicolon.md)
- [Prepared Query](/features/prepared-query.md)
- [Injection](/features/injection.md)
- [Static Application Security Testing (SAST)](/features/sast.md)
- [Second Order SQL Injection](/features/second-order-sql-injection.md)
- [Data Flow Analysis (DFA)](/features/data-flow-analysis.md)
- [Insecure Direct Object Reference (IDOR)](/features/idor.md)
- [Image Injection](/features/image-injection.md)
- [LDAP Injection](/features/ldap-injection.md)

