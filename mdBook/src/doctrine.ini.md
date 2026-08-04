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

Related : [Object Relational Mapping (ORM)](Object Relational Mapping (ORM)), [Database Abstraction Layer (DBAL)](Database Abstraction Layer (DBAL)), [Data Mapper](Data Mapper), [Active Record](Active Record)
