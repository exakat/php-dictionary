# Data Source Name (DSN)
A DSN is a string that describes a database location and access. 

The format of a DSN is usually specified by the target database. For example: 

+ MySQL: 'mysql:host=localhost;dbname=test'
+ Oracle: 'oci:dbname=//localhost:1521/mydb'
+ PostGreSQL: 'pgsql:host=localhost;port=5432;dbname=testdb;user=bruce;password=mypass'
+ SQLite: 'sqlite:/opt/databases/mydb.sq3'

DSN is closely related to the PDO extension.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dsn.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dsn.ini.html","name":"Data Source Name (DSN)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:48:41 +0000","dateModified":"Wed, 05 Aug 2026 08:48:41 +0000","description":"A DSN is a string that describes a database location and access","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Data Source Name (DSN).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Configuration](configuration.ini.html)
+ [Connection](connection.ini.html)
+ [Database](database.ini.html)
+ [PHP Data Objects (PDO)](pdo.ini.html)
+ [Universal Resource Identifier (URI)](uri.ini.html)
