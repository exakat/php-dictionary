# Foreign Key
A foreign key is a column, or set of columns, in a relational database table that references the primary key of another table. It establishes and enforces a link between the two tables, ensuring that the referencing value actually exists in the referenced table.

Foreign keys are the mechanism behind referential integrity: the database engine rejects an insert or update that would point to a non-existent row, and, depending on the ``ON DELETE``/``ON UPDATE`` clause, either blocks, cascades, or nullifies dependent rows when the referenced row is deleted or changed.

In applications, foreign keys are usually declared in migrations, through an ORM such as Doctrine or Eloquent, or directly in SQL DDL. Bulk imports, ETL jobs, and data migrations are common places where foreign key violations surface, when a referenced row was skipped, renamed, or failed to convert, so the constraint is exactly what would catch that class of bug, if it is enforced instead of being disabled for import speed.
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

## See Also

+ [Foreign key constraints - MySQL](https://dev.mysql.com/doc/refman/8.0/en/create-table-foreign-keys.html)

Related : [Referential Integrity](Referential Integrity), [Database](Database), [SQL Database](SQL Database), [Migration](Migration), [Cascading Failure](Cascading Failure), [Cascading](Cascading), [Transaction](Transaction), [Unique Identifier](Unique Identifier)
