# PostgreSQL
``pgsql`` is the name of the PHP extension that provides the interface to interact with the PostgreSQL database.

``pgsql`` defines functions, constants and classes. It has been upgraded to use objects instead of resources.
```php
<?php

    // example from the PHP manual : https://www.php.net/manual/en/pgsql.examples-basic.php
    
    // Connecting, selecting database
    $dbconn = pg_connect('host=localhost dbname=publishing user=www password=foo')
        or die('Could not connect: ' . pg_last_error());
    
    // Performing SQL query
    $query = 'SELECT * FROM authors';
    $result = pg_query($dbconn, $query) or die('Query failed: ' . pg_last_error());

?>
```

## See Also

+ [PostgreSQL homepage](https://www.postgresql.org/)
+ [How to Connect PHP and PostgreSQL](https://www.zend.com/blog/php-and-postgresql)
+ [How to build an Application with PHP and PostgreSQL](https://dev.to/officialozioma/how-to-build-an-application-with-php-and-postgresql-4iad)

Related : [Database](Database), [Structured Query Language (SQL)](Structured Query Language (SQL)), [JavaScript Object Notation (JSON)](JavaScript Object Notation (JSON)), [Relational DataBase Management System (RDBMS)](Relational DataBase Management System (RDBMS)), [SQL Database](SQL Database)
