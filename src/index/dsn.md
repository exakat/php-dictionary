# Data Source Name (DSN)
A DSN is a string that describes a database location and access. 

The format of a DSN is usually specified by the target database. For example: 

+ MySQL: 'mysql:host=localhost;dbname=test'
+ Oracle: 'oci:dbname=//localhost:1521/mydb'
+ PostgreSQL: 'pgsql:host=localhost;port=5432;dbname=testdb;user=bruce;password=mypass'
+ SQLite: 'sqlite:/opt/databases/mydb.sq3'

DSN is closely related to the PDO extension.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dsn.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dsn.html","name":"Data Source Name (DSN)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:31:02 +0000","dateModified":"Sat, 08 Aug 2026 14:31:02 +0000","description":"A DSN is a string that describes a database location and access","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Data Source Name (DSN).html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"dsn"}]}]}</script>
```php
<?php

    $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);

?>
```

**[Documentation](https://www.php.net/manual/en/pdo.connections.php)**
## See Also

+ [PDO_MYSQL DSN](https://www.php.net/manual/en/ref.pdo-mysql.connection.php)
+ [PDO_PGSQL DSN](https://www.php.net/manual/en/ref.pdo-pgsql.connection.php)
+ [PDO_SQLITE DSN](https://www.php.net/manual/en/ref.pdo-sqlite.connection.php)

## Related

+ [Configuration](configuration.html)
+ [Connection](connection.html)
+ [Database](database.html)
+ [PHP Data Objects (PDO)](pdo.html)
+ [Universal Resource Identifier (URI)](uri.html)
