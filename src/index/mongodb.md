# MongoDB
``MongoDB`` is the official PIE extension that provides the low-level driver for connecting PHP to MongoDB, a document-oriented NoSQL database. The extension itself is intentionally thin: it handles the wire protocol, connection pooling, and BSON encoding and decoding, while the higher-level, user-facing API is provided by the ``mongodb/mongodb`` Composer library built on top of it.

Documents are represented as BSON, a binary superset of JSON that adds types such as ``ObjectId``, ``Date``, and ``Decimal128``. The extension exposes classes such as ``MongoDB\Driver\Manager`` for connecting, and ``MongoDB\Driver\Query`` and ``MongoDB\Driver\BulkWrite`` for reading and writing, though most applications interact with the friendlier ``MongoDB\Client`` class from the Composer package instead.

This driver replaced the older, now unsupported ``mongo`` PECL extension, which was deprecated because its API predated MongoDB's modern write-concern and server-selection semantics.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mongodb.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mongodb.html","name":"MongoDB","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 05:35:21 +0000","dateModified":"Tue, 14 Jul 2026 05:35:21 +0000","description":"MongoDB is the official PIE extension that provides the low-level driver for connecting PHP to MongoDB, a document-oriented NoSQL database","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/MongoDB.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"mongodb"}]}]}</script>
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

**[Documentation](https://www.php.net/manual/en/book.mongodb.php)**
## See Also

+ [MongoDB PHP driver docs](https://www.mongodb.com/docs/drivers/php/)

## Related

+ [PHP Data Objects (PDO)](pdo.html)
+ [SQLite3](sqlite3.html)
+ [Database](database.html)
+ [JavaScript Object Notation (JSON)](json.html)

## Related packages

+ [mongodb/mongodb](https://packagist.org/packages/mongodb/mongodb)
