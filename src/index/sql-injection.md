# SQL Injection
A SQL injection is a vulnerability, where external data are used to change the behavior of a SQL query. 

In the example below, ``$_GET`` are directly used inside the query. By using a clever string, as shown in comment, it is possible to bypass the whole condition and get access to any user. 

Among the solutions to mitigate this problem: filter adequately the incoming data; use prepared statements.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sql-injection.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sql-injection.html","name":"SQL Injection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Aug 2026 10:16:14 +0000","dateModified":"Fri, 07 Aug 2026 10:16:14 +0000","description":"A SQL injection is a vulnerability, where external data are used to change the behavior of a SQL query","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/SQL Injection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"SQL Injection"}]}]}</script>
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

+ [Semicolon ;](semicolon.html)
+ [Prepared Query](prepared-query.html)
+ [Injection](injection.html)
+ [Static Application Security Testing (SAST)](sast.html)
+ [Second Order SQL Injection](second-order-sql-injection.html)
+ [Data Flow Analysis (DFA)](data-flow-analysis.html)
+ [Insecure Direct Object Reference (IDOR)](idor.html)
+ [Image Injection](image-injection.html)
+ [LDAP Injection](ldap-injection.html)
