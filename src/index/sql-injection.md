# SQL Injection
A SQL injection is a vulnerability, where external data are used to change the behavior of a SQL query. 

In the example below, ``$_GET`` are directly used inside the query. By using a clever string, as shown in comment, it is possible to bypass the whole condition and get access to any user. 

Among the solutions to mitigate this problem: filter adequately the incoming data; use prepared statements.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sql-injection.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sql-injection.html","name":"SQL Injection","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A SQL injection is a vulnerability, where external data are used to change the behavior of a SQL query","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sql-injection.html"]}],"keywords":["security"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/semicolon.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/prepared-query.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/second-order-sql-injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-flow-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idor.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/image-injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ldap-injection.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/security.database.sql-injection.php"},{"@type":"CreativeWork","name":"SQL Injection in PHP Web Applications","url":"https:\/\/brightsec.com\/blog\/php-sql-injection\/"},{"@type":"CreativeWork","name":"What is SQL injection and how to prevent it?","url":"https:\/\/docs.php.earth\/security\/sql-injection\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sql-injection"}]}]}</script>
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
