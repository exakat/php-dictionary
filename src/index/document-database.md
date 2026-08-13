# Document Database
A document database is a type of NoSQL database that stores data as semi-structured documents, typically in JSON, BSON, or XML format. Each document is a self-contained record with a flexible schema, unlike the fixed rows and columns of relational databases.

Common document databases used with PHP include MongoDB and CouchDB. PHP drivers and libraries such as the official MongoDB extension or Doctrine ODM provide integration.

Document databases are well suited to hierarchical or varying-structure data, but lack the relational joins and strict consistency guarantees of SQL databases.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/document-database.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/document-database.html","name":"Document Database","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A document database is a type of NoSQL database that stores data as semi-structured documents, typically in JSON, BSON, or XML format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Document Database.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"document-database"}]}]}</script>
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

**[Documentation](https://www.mongodb.com/)**
## See Also

+ [MongoDB PHP Library](https://www.mongodb.com/docs/php-library/current/)

## Related

+ [Nosql Database](nosql-database.html)
+ [Database](database.html)
+ [SQL Database](sql-database.html)
+ [Key-value Stores](key-value-store.html)
+ [JavaScript Object Notation (JSON)](json.html)
+ [Extensible Markup Language (XML)](xml.html)
+ [Schema](schema.html)

## Related packages

+ [mongodb/mongodb](https://packagist.org/packages/mongodb/mongodb)
