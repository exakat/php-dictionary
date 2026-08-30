---
type: "acronym"
title: "ETL"
description: "ETL, for Extract, Transform, Load, is a three-stage process used to move data from one or more source systems into a target system."
resource: "https://en.wikipedia.org/wiki/Extract,_transform,_load"
tags: ["architecture", "acronym", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# ETL

ETL, for Extract, Transform, Load, is a three-stage process used to move data from one or more source systems into a target system. Extract reads data from the source, for example a legacy database, a CSV export, or an API; transform converts, cleans, and reshapes that data to match the target's schema and rules, such as mapping locale codes or resolving foreign keys; load writes the transformed data into the destination.

ETL is the backbone of data migrations, data warehousing, and platform-to-platform migrations, such as moving a store from one e-commerce platform to another. The transform stage is where most silent bugs live: a lookup that returns null instead of raising an error on an unmapped value, a string replacement that only handles the common case, or a locale code that does not match any entry in a mapping table, will quietly drop or nullify data instead of failing the migration.

A variant, ELT, for Extract, Load, Transform, loads raw data first and transforms it inside the target system, often using its own query engine. ETL steps are commonly implemented as CLI scripts or queued jobs, reading from one data source and writing through an ORM, or direct SQL, into another, with row counts and conversion rates tracked to detect when a stage silently drops far more rows than expected.

```php
<?php

    // A minimal ETL step: extract, transform, load
    foreach ($source->fetchProducts() as $row) {          // extract
        $locale = $localeMap[$row['locale_code']] ?? null; // transform

        if ($locale === null) {
            $errors[] = $row['locale_code']; // don't fail silently
            continue;
        }

        $target->insertProduct($row, $locale);             // load
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Extract,_transform,_load](https://en.wikipedia.org/wiki/Extract,_transform,_load)

## See Also
- [Manipulating Data with PHP: performing ETL operations](https://dev.to/ecourtial/manipulating-data-with-php-performing-etl-operations-g4j)

## Related
- [Migration](/features/migration.md)
- [Database](/features/database.md)
- [Referential Integrity](/features/referential-integrity.md)
- [Foreign Key](/features/foreign-key.md)
- [Pipeline](/features/pipeline.md)
- [Silent Behavior](/features/silent.md)
- [Validation](/features/validation.md)

## Details
- Packagist: [flow-php/etl](https://packagist.org/packages/flow-php/etl)
- Packagist: [fr3on/php-etl](https://packagist.org/packages/fr3on/php-etl)

