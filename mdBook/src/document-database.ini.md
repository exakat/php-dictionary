# Document Database
A document database is a type of NoSQL database that stores data as semi-structured documents, typically in JSON, BSON, or XML format. Each document is a self-contained record with a flexible schema, unlike the fixed rows and columns of relational databases.

Common document databases used with PHP include MongoDB and CouchDB. PHP drivers and libraries such as the official MongoDB extension or Doctrine ODM provide integration.

Document databases are well suited to hierarchical or varying-structure data, but lack the relational joins and strict consistency guarantees of SQL databases.
```php
<?php

    // MongoDB PHP driver example
    $client = new MongoDB\Client('mongodb://localhost:27017');
    $collection = $client->mydb->users;
    
    $collection->insertOne([
        'name'  => 'Alice',
        'email' => 'alice@example.com',
        'roles' => ['admin', 'editor'],
    ]);
    
    $user = $collection->findOne(['name' => 'Alice']);
    echo $user['email'];

?>
```

## See Also

+ [MongoDB PHP Library](https://www.mongodb.com/docs/php-library/current/)

Related : [Nosql Database](Nosql Database), [Database](Database), [SQL Database](SQL Database), [Key-value Stores](Key-value Stores), [JavaScript Object Notation (JSON)](JavaScript Object Notation (JSON)), [Extensible Markup Language (XML)](Extensible Markup Language (XML)), [Schema](Schema)
