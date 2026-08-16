# Foreign Key
A foreign key is a column, or set of columns, in a relational database table that references the primary key of another table. It establishes and enforces a link between the two tables, ensuring that the referencing value actually exists in the referenced table.

Foreign keys are the mechanism behind referential integrity: the database engine rejects an insert or update that would point to a non-existent row, and, depending on the ``ON DELETE``/``ON UPDATE`` clause, either blocks, cascades, or nullifies dependent rows when the referenced row is deleted or changed.

In applications, foreign keys are usually declared in migrations, through an ORM such as Doctrine or Eloquent, or directly in SQL DDL. Bulk imports, ETL jobs, and data migrations are common places where foreign key violations surface, when a referenced row was skipped, renamed, or failed to convert, so the constraint is exactly what would catch that class of bug, if it is enforced instead of being disabled for import speed.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/foreign-key.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/foreign-key.html","name":"Foreign Key","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 10:58:34 +0000","dateModified":"Tue, 04 Aug 2026 10:58:34 +0000","description":"A foreign key is a column, or set of columns, in a relational database table that references the primary key of another table","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Foreign Key.html"]}],"alternateName":["FK"],"keywords":["database","concept","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/referential-integrity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sql-database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/migration.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cascading-failure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cascading.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/transaction.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unique-identifier.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Foreign_key"},{"@type":"CreativeWork","name":"Foreign key constraints - MySQL","url":"https:\/\/dev.mysql.com\/doc\/refman\/8.0\/en\/create-table-foreign-keys.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"foreign-key"}]}]}</script>
```php
<?php

    // Doctrine migration declaring a foreign key
    $table->addColumn('customer_id', 'integer');
    $table->addForeignKeyConstraint(
        'customer',
        ['customer_id'],
        ['id'],
        ['onDelete' => 'CASCADE']
    );

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Foreign_key)**
## See Also

+ [Foreign key constraints - MySQL](https://dev.mysql.com/doc/refman/8.0/en/create-table-foreign-keys.html)

## Related

+ [Referential Integrity](referential-integrity.html)
+ [Database](database.html)
+ [SQL Database](sql-database.html)
+ [Migration](migration.html)
+ [Cascading Failure](cascading-failure.html)
+ [Cascading](cascading.html)
+ [Transaction](transaction.html)
+ [Unique Identifier](unique-identifier.html)
