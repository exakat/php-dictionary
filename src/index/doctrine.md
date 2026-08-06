# Doctrine
Doctrine is a set of PHP libraries built around persistence and object-relational mapping. Its two flagship projects are Doctrine DBAL, a database abstraction layer providing one API over multiple database engines, and Doctrine ORM, built on top of DBAL, which maps PHP objects to database rows and back using the Data Mapper pattern, rather than Active Record, so entities stay ignorant of how they are persisted.

Doctrine ORM uses annotations, or attributes since PHP 8, or XML/YAML mapping files, to describe how a class's properties map to a table's columns. It tracks changes to managed entities through a Unit of Work, and only issues the SQL statements needed to persist them once ``flush()`` is called, instead of after every individual change.

Doctrine also ships companion libraries: ``Doctrine Migrations``, to version and apply schema changes, and Doctrine Collections and Doctrine Inflector, both used well beyond the ORM itself. It is the default persistence layer of Symfony, and one of the most widely used ORMs in the PHP ecosystem, alongside Eloquent and Propel.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/doctrine.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/doctrine.html","name":"Doctrine","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 10:13:04 +0000","dateModified":"Thu, 09 Jul 2026 10:13:04 +0000","description":"Doctrine is a set of PHP libraries built around persistence and object-relational mapping","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Doctrine.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Doctrine ORM: entities are persisted through a Unit of Work
    $user = new User();
    $user->setName('Alice');

    $entityManager->persist($user); // schedules the insert
    $entityManager->flush();        // issues the actual SQL

?>
```

**[Documentation](https://www.doctrine-project.org/)**
## Related

+ [Object Relational Mapping (ORM)](orm.ini.html)
+ [Database Abstraction Layer (DBAL)](dbal.ini.html)
+ [Data Mapper](data-mapper.ini.html)
+ [Active Record](active-record.ini.html)

## Related packages

+ [doctrine/orm](https://packagist.org/packages/doctrine/orm)
+ [doctrine/dbal](https://packagist.org/packages/doctrine/dbal)
+ [doctrine/migrations](https://packagist.org/packages/doctrine/migrations)
+ [doctrine/collections](https://packagist.org/packages/doctrine/collections)
