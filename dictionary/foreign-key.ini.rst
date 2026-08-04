.. _foreign-key:
.. _FK:
.. meta::
	:description:
		Foreign Key: A foreign key is a column, or set of columns, in a relational database table that references the primary key of another table.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Foreign Key
	:twitter:description: Foreign Key: A foreign key is a column, or set of columns, in a relational database table that references the primary key of another table
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Foreign Key
	:og:type: article
	:og:description: A foreign key is a column, or set of columns, in a relational database table that references the primary key of another table
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/foreign-key.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/foreign-key.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/foreign-key.ini.html","name":"Foreign Key","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 10:58:34 +0000","dateModified":"Tue, 04 Aug 2026 10:58:34 +0000","description":"A foreign key is a column, or set of columns, in a relational database table that references the primary key of another table","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Foreign Key.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Foreign Key
-----------

A foreign key is a column, or set of columns, in a relational database table that references the primary key of another table. It establishes and enforces a link between the two tables, ensuring that the referencing value actually exists in the referenced table.

Foreign keys are the mechanism behind referential integrity: the database engine rejects an insert or update that would point to a non-existent row, and, depending on the ``ON DELETE``/``ON UPDATE`` clause, either blocks, cascades, or nullifies dependent rows when the referenced row is deleted or changed.

In applications, foreign keys are usually declared in migrations, through an ORM such as Doctrine or Eloquent, or directly in SQL DDL. Bulk imports, ETL jobs, and data migrations are common places where foreign key violations surface, when a referenced row was skipped, renamed, or failed to convert, so the constraint is exactly what would catch that class of bug, if it is enforced instead of being disabled for import speed.

.. code-block:: php
   
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


`Documentation <https://en.wikipedia.org/wiki/Foreign_key>`__

See also `Foreign key constraints - MySQL <https://dev.mysql.com/doc/refman/8.0/en/create-table-foreign-keys.html>`_.

Related : :ref:`Referential Integrity <referential-integrity>`, :ref:`Database <database>`, :ref:`SQL Database <sql-database>`, :ref:`Migration <migration>`, :ref:`Cascading Failure <cascading-failure>`, :ref:`Cascading <cascading>`, :ref:`Transaction <transaction>`, :ref:`Unique Identifier <unique-identifier>`
