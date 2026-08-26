# Doctrine
Doctrine is a set of PHP libraries built around persistence and object-relational mapping. Its two flagship projects are Doctrine DBAL, a database abstraction layer providing one API over multiple database engines, and Doctrine ORM, built on top of DBAL, which maps PHP objects to database rows and back using the Data Mapper pattern, rather than Active Record, so entities stay ignorant of how they are persisted.

Doctrine ORM uses annotations, or attributes since PHP 8, or XML/YAML mapping files, to describe how a class's properties map to a table's columns. It tracks changes to managed entities through a Unit of Work, and only issues the SQL statements needed to persist them once ``flush()`` is called, instead of after every individual change.

Doctrine also ships companion libraries: ``Doctrine Migrations``, to version and apply schema changes, and Doctrine Collections and Doctrine Inflector, both used well beyond the ORM itself. It is the default persistence layer of Symfony, and one of the most widely used ORMs in the PHP ecosystem, alongside Eloquent and Propel.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/doctrine.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/doctrine.html","name":"Doctrine","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 12:17:01 +0000","dateModified":"Tue, 25 Aug 2026 12:17:01 +0000","description":"Doctrine is a set of PHP libraries built around persistence and object-relational mapping","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/doctrine.html"]}],"keywords":["tool","dbal","database"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/orm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dbal.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-mapper.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/active-record.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.doctrine-project.org\/"},{"@type":"CreativeWork","name":"Doctrine ORM Documentation","url":"https:\/\/www.doctrine-project.org\/projects\/doctrine-orm\/en\/current\/index.html"},{"@type":"CreativeWork","name":"Symfony: Databases and Doctrine","url":"https:\/\/symfony.com\/doc\/current\/doctrine.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"doctrine"}]}]}</script>
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
## See Also

+ [Doctrine ORM Documentation](https://www.doctrine-project.org/projects/doctrine-orm/en/current/index.html)
+ [Symfony: Databases and Doctrine](https://symfony.com/doc/current/doctrine.html)

## Related

+ [Object Relational Mapping (ORM)](orm.html)
+ [Database Abstraction Layer (DBAL)](dbal.html)
+ [Data Mapper](data-mapper.html)
+ [Active Record](active-record.html)

## Related packages

+ [doctrine/orm](https://packagist.org/packages/doctrine/orm)
+ [doctrine/dbal](https://packagist.org/packages/doctrine/dbal)
+ [doctrine/migrations](https://packagist.org/packages/doctrine/migrations)
+ [doctrine/collections](https://packagist.org/packages/doctrine/collections)
