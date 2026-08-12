# Primary Key
A primary key is a column, or set of columns, in a relational database table whose values uniquely identify each row. A table has at most one primary key, and none of its columns may hold ``NULL``.

The database engine automatically builds a unique index on the primary key, which is what makes lookups and joins against it fast. Every foreign key in the schema points back to some table's primary key, which is why the two concepts are always discussed together.

A primary key may be a natural key, a value that already carries business meaning, such as an email or an ISBN, or a surrogate key, an artificial value with no meaning outside the database, such as an auto-increment integer or a UUID. Surrogate keys are the more common choice, since natural keys can change over time or turn out not to be as unique as assumed.

A composite primary key spans several columns; this is common on join tables in many-to-many relationships, where the pair of foreign keys together forms the key.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/primary-key.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/primary-key.html","name":"Primary Key","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 12 Aug 2026 07:50:45 +0000","dateModified":"Wed, 12 Aug 2026 07:50:45 +0000","description":"A primary key is a column, or set of columns, in a relational database table whose values uniquely identify each row","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Primary Key.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"primary-key"}]}]}</script>
```php
<?php

    // Doctrine migration declaring a primary key
    $table->addColumn('id', 'integer', ['autoincrement' => true]);
    $table->setPrimaryKey(['id']);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Primary_key)**
## See Also

+ [Primary key constraints - MySQL](https://dev.mysql.com/doc/refman/8.0/en/create-table.html)

## Related

+ [Foreign Key](foreign-key.html)
+ [Surrogate Key](surrogate-key.html)
+ [Auto-Increment](auto-increment.html)
+ [Unique Identifier](unique-identifier.html)
+ [Referential Integrity](referential-integrity.html)
+ [Database](database.html)
+ [Index For SQL](index-sql.html)
