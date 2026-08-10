# Oracle
Oracle is a relational database management system developed by Oracle Corporation. It is one of the most widely used enterprise databases, known for its robustness, advanced SQL features, and scalability.

PHP connects to Oracle databases via the OCI8 extension called ``ext/oci8``, which provides functions prefixed with ``oci_`` such as ``oci_connect()``, ``oci_parse()``, ``oci_execute()``, and ``oci_fetch_array()``. Oracle can also be accessed via PDO using the ``pdo_oci`` driver.

Oracle-specific features that PHP developers encounter include: sequences in lieu of auto-increment, ``ROWNUM`` for pagination, PL/SQL stored procedures, and CLOB/BLOB handling for large data.

The term ``oracle`` is also used in testing to describe the mechanism by which a test determines whether its output is correct, and in cryptography for an attacker-accessible function that reveals partial information about a secret.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/oracle.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/oracle.html","name":"Oracle","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:32:14 +0000","dateModified":"Sat, 08 Aug 2026 14:32:14 +0000","description":"Oracle is a relational database management system developed by Oracle Corporation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Oracle.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Oracle"}]}]}</script>
```php
<?php

    $conn = oci_connect('user', 'password', 'localhost/XE');
    $stmt = oci_parse($conn, 'SELECT id, name FROM users WHERE id = :id');
    oci_bind_by_name($stmt, ':id', $userId);
    oci_execute($stmt);
    
    while ($row = oci_fetch_array($stmt, OCI_ASSOC)) {
        echo $row['NAME'];
    }

?>
```

**[Documentation](https://www.php.net/manual/en/book.oci8.php)**
## See Also

+ [PDO_OCI — PHP Manual](https://www.php.net/manual/en/ref.pdo-oci.php)

## Related

+ [Database](database.html)
+ [PHP Data Objects (PDO)](pdo.html)
+ [MySQL](mysql.html)
+ [Database Abstraction Layer (DBA) Extension](dba.html)
+ [SQL Database](sql-database.html)
