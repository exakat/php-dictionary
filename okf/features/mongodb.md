---
type: "extension"
title: "MongoDB"
description: "``MongoDB`` is the official PIE extension that provides the low-level driver for connecting PHP to MongoDB, a document-oriented NoSQL database."
resource: "https://www.php.net/manual/en/book.mongodb.php"
tags: ["extension", "database"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# MongoDB

``MongoDB`` is the official PIE extension that provides the low-level driver for connecting PHP to MongoDB, a document-oriented NoSQL database. The extension itself is intentionally thin: it handles the wire protocol, connection pooling, and BSON encoding and decoding, while the higher-level, user-facing API is provided by the ``mongodb/mongodb`` Composer library built on top of it.

Documents are represented as BSON, a binary superset of JSON that adds types such as ``ObjectId``, ``Date``, and ``Decimal128``. The extension exposes classes such as ``MongoDB\Driver\Manager`` for connecting, and ``MongoDB\Driver\Query`` and ``MongoDB\Driver\BulkWrite`` for reading and writing, though most applications interact with the friendlier ``MongoDB\Client`` class from the Composer package instead.

This driver replaced the older, now unsupported ``mongo`` PECL extension, which was deprecated because its API predated MongoDB's modern write-concern and server-selection semantics.

```php
<?php

    // Requires composer require mongodb/mongodb, which depends on ext-mongodb.
    $client = new MongoDB\Client('mongodb://localhost:27017');

    $collection = $client->test->users;
    $collection->insertOne(['name' => 'Ada', 'role' => 'engineer']);

    foreach ($collection->find(['role' => 'engineer']) as $user) {
        echo $user['name'] . PHP_EOL;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/book.mongodb.php](https://www.php.net/manual/en/book.mongodb.php)

## See Also
- [MongoDB PHP driver docs](https://www.mongodb.com/docs/drivers/php/)

## Related
- [PHP Data Objects (PDO)](/features/pdo.md)
- [SQLite3](/features/sqlite3.md)
- [Database](/features/database.md)
- [JavaScript Object Notation (JSON)](/features/json.md)

## Details
- Packagist: [mongodb/mongodb](https://packagist.org/packages/mongodb/mongodb)
- Extension: ext-mongodb

