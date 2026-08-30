---
type: "concept"
title: "Referential Integrity"
description: "Referential integrity is a database property guaranteeing that a reference from one row to another always points to a row that actually exists."
resource: "https://en.wikipedia.org/wiki/Referential_integrity"
tags: ["database", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Referential Integrity

Referential integrity is a database property guaranteeing that a reference from one row to another always points to a row that actually exists. It is enforced by foreign key constraints: the database refuses to insert a row that references a missing parent, and refuses to delete, or update, a parent row while dependent rows still reference it, unless a cascade rule is declared.

When referential integrity is disabled, or bypassed, for example by turning off foreign key checks to speed up a bulk import, orphaned rows can accumulate silently: a product referencing a deleted category, an order referencing a locale that was never created. Nothing fails loudly, but joins start returning null, or dropping rows, and reports quietly under-count.

Referential integrity is most at risk during data migrations and ETL jobs, where rows are written out of dependency order, or where a lookup used to resolve a reference falls back to null instead of raising an error. Re-enabling and validating constraints after a bulk load is a common way to catch these gaps before they reach production.

```php
<?php

    // Without referential integrity, a bad reference is written silently
    $stmt = $pdo->prepare('INSERT INTO orders (customer_id, locale_id) VALUES (?, ?)');
    $stmt->execute([$customerId, $localeId ?? null]); // null locale_id: silent orphan

    // With a foreign key constraint, this insert would fail loudly instead

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Referential_integrity](https://en.wikipedia.org/wiki/Referential_integrity)

## See Also
- [Master Referential Integrity Best Practices for PHP](https://moldstud.com/articles/p-master-referential-integrity-best-practices-for-php)

## Related
- [Foreign Key](/features/foreign-key.md)
- [Database](/features/database.md)
- [Migration](/features/migration.md)
- [ETL](/features/etl.md)
- [Cascading Failure](/features/cascading-failure.md)
- [Transaction](/features/transaction.md)
- [Validation](/features/validation.md)
- [Silent Behavior](/features/silent.md)

