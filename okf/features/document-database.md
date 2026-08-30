---
type: "PHP Feature"
title: "Document Database"
description: "A document database is a type of NoSQL database that stores data as semi-structured documents, typically in JSON, BSON, or XML format."
resource: "https://www.mongodb.com/"
tags: ["database", "nosql"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.mongodb.com/](https://www.mongodb.com/)

## See Also
- [MongoDB PHP Library](https://www.mongodb.com/docs/php-library/current/)

## Related
- [Nosql Database](/features/nosql-database.md)
- [Database](/features/database.md)
- [SQL Database](/features/sql-database.md)
- [Key-value Stores](/features/key-value-store.md)
- [JavaScript Object Notation (JSON)](/features/json.md)
- [Extensible Markup Language (XML)](/features/xml.md)
- [Schema](/features/schema.md)

## Details
- Packagist: [mongodb/mongodb](https://packagist.org/packages/mongodb/mongodb)
- Extension: ext-mongodb

