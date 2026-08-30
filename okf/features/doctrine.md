---
type: "PHP Feature"
title: "Doctrine"
description: "Doctrine is a set of PHP libraries built around persistence and object-relational mapping."
resource: "https://www.doctrine-project.org/"
tags: ["tool", "dbal", "database"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Doctrine

Doctrine is a set of PHP libraries built around persistence and object-relational mapping. Its two flagship projects are Doctrine DBAL, a database abstraction layer providing one API over multiple database engines, and Doctrine ORM, built on top of DBAL, which maps PHP objects to database rows and back using the Data Mapper pattern, rather than Active Record, so entities stay ignorant of how they are persisted.

Doctrine ORM uses annotations, or attributes since PHP 8, or XML/YAML mapping files, to describe how a class's properties map to a table's columns. It tracks changes to managed entities through a Unit of Work, and only issues the SQL statements needed to persist them once ``flush()`` is called, instead of after every individual change.

Doctrine also ships companion libraries: ``Doctrine Migrations``, to version and apply schema changes, and Doctrine Collections and Doctrine Inflector, both used well beyond the ORM itself. It is the default persistence layer of Symfony, and one of the most widely used ORMs in the PHP ecosystem, alongside Eloquent and Propel.

```php
<?php

    // Doctrine ORM: entities are persisted through a Unit of Work
    $user = new User();
    $user->setName('Alice');

    $entityManager->persist($user); // schedules the insert
    $entityManager->flush();        // issues the actual SQL

?>
```

## Documentation
- [https://www.doctrine-project.org/](https://www.doctrine-project.org/)

## See Also
- [Doctrine ORM Documentation](https://www.doctrine-project.org/projects/doctrine-orm/en/current/index.html)
- [Symfony: Databases and Doctrine](https://symfony.com/doc/current/doctrine.html)

## Related
- [Object Relational Mapping (ORM)](/features/orm.md)
- [Database Abstraction Layer (DBAL)](/features/dbal.md)
- [Data Mapper](/features/data-mapper.md)
- [Active Record](/features/active-record.md)

## Details
- Packagist: [doctrine/orm](https://packagist.org/packages/doctrine/orm)
- Packagist: [doctrine/dbal](https://packagist.org/packages/doctrine/dbal)
- Packagist: [doctrine/migrations](https://packagist.org/packages/doctrine/migrations)
- Packagist: [doctrine/collections](https://packagist.org/packages/doctrine/collections)

