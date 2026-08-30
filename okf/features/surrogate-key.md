---
type: "concept"
title: "Surrogate Key"
description: "A surrogate key is a primary key column with no meaning outside the database: it exists purely to identify a row, not to represent a business fact."
resource: "https://en.wikipedia.org/wiki/Surrogate_key"
tags: ["database", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Surrogate Key

A surrogate key is a primary key column with no meaning outside the database: it exists purely to identify a row, not to represent a business fact. An auto-increment integer, a UUID, or a ``ULID`` used as a primary key are all surrogate keys. They are opposed to natural keys, values such as an email address, a national ID, or an ISBN, that already have meaning in the domain and would otherwise be used to identify the row.

Surrogate keys are preferred in most schema because natural keys can change, can turn out not to be as unique as assumed, and are often composite or of variable length, all of which make joins and indexes slower and migrations riskier.

A related but distinct usage, common in APIs, is to add a second surrogate column purely for public exposure: the internal auto-increment integer stays the primary key and drives foreign-key relations, while a separate UUID, ``ULID``, or an obfuscated value such as a ``Sqid`` is exposed in URLs and API responses. This keeps the compact integer for indexing while avoiding the enumeration and information-leak risks of publishing sequential IDs.

```php
<?php

    // Doctrine migration: surrogate primary key plus a public-facing surrogate column
    $table->addColumn('id', 'integer', ['autoincrement' => true]);
    $table->setPrimaryKey(['id']);
    $table->addColumn('public_id', 'guid'); // exposed in the API instead of 'id'

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Surrogate_key](https://en.wikipedia.org/wiki/Surrogate_key)

## See Also
- [Relational Data Model](https://martinfowler.com/bliki/RelationalDataModel.html)

## Related
- [Primary Key](/features/primary-key.md)
- [Auto-Increment](/features/auto-increment.md)
- [Unique Identifier](/features/unique-identifier.md)
- [Universally Unique IDentifier (UUID)](/features/uuid.md)
- [Universally Unique Lexicographically Sortable Identifier (ULID)](/features/ulid.md)
- [Sqids](/features/sqids.md)
- [Database](/features/database.md)

