---
type: "concept"
title: "Primary Key"
description: "A primary key is a column, or set of columns, in a relational database table whose values uniquely identify each row."
resource: "https://en.wikipedia.org/wiki/Primary_key"
tags: ["database", "concept", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Primary Key

A primary key is a column, or set of columns, in a relational database table whose values uniquely identify each row. A table has at most one primary key, and none of its columns may hold ``NULL``.

The database engine automatically builds a unique index on the primary key, which is what makes lookups and joins against it fast. Every foreign key in the schema points back to some table's primary key, which is why the two concepts are always discussed together.

A primary key may be a natural key, a value that already carries business meaning, such as an email or an ISBN, or a surrogate key, an artificial value with no meaning outside the database, such as an auto-increment integer or a UUID. Surrogate keys are the more common choice, since natural keys can change over time or turn out not to be as unique as assumed.

A composite primary key spans several columns; this is common on join tables in many-to-many relationships, where the pair of foreign keys together forms the key.

```php
<?php

    // Doctrine migration declaring a primary key
    $table->addColumn('id', 'integer', ['autoincrement' => true]);
    $table->setPrimaryKey(['id']);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Primary_key](https://en.wikipedia.org/wiki/Primary_key)

## See Also
- [Primary key constraints - MySQL](https://dev.mysql.com/doc/refman/8.0/en/create-table.html)

## Related
- [Foreign Key](/features/foreign-key.md)
- [Surrogate Key](/features/surrogate-key.md)
- [Auto-Increment](/features/auto-increment.md)
- [Unique Identifier](/features/unique-identifier.md)
- [Referential Integrity](/features/referential-integrity.md)
- [Database](/features/database.md)
- [Index For SQL](/features/index-sql.md)

