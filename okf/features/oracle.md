---
type: "extension"
title: "Oracle"
description: "Oracle is a relational database management system developed by Oracle Corporation."
resource: "https://www.php.net/manual/en/book.oci8.php"
tags: ["extension", "database", "disambiguation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Oracle

Oracle is a relational database management system developed by Oracle Corporation. It is one of the most widely used enterprise databases, known for its robustness, advanced SQL features, and scalability.

PHP connects to Oracle databases via the OCI8 extension called ``ext/oci8``, which provides functions prefixed with ``oci_`` such as ``oci_connect()``, ``oci_parse()``, ``oci_execute()``, and ``oci_fetch_array()``. Oracle can also be accessed via PDO using the ``pdo_oci`` driver.

Oracle-specific features that PHP developers encounter include: sequences in lieu of auto-increment, ``ROWNUM`` for pagination, PL/SQL stored procedures, and CLOB/BLOB handling for large data.

The term ``oracle`` is also used in testing to describe the mechanism by which a test determines whether its output is correct, and in cryptography for an attacker-accessible function that reveals partial information about a secret.

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

## Documentation
- [https://www.php.net/manual/en/book.oci8.php](https://www.php.net/manual/en/book.oci8.php)

## See Also
- [PDO_OCI — PHP Manual](https://www.php.net/manual/en/ref.pdo-oci.php)

## Related
- [Database](/features/database.md)
- [PHP Data Objects (PDO)](/features/pdo.md)
- [MySQL](/features/mysql.md)
- [Database Abstraction Layer (DBA) Extension](/features/dba.md)
- [SQL Database](/features/sql-database.md)

## Details
- Extension: ext-ext/oci8

