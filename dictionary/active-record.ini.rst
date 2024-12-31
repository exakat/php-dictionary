.. _active-record:
.. meta::
	:description:
		Active Record: Active Record is a design pattern commonly used in PHP development.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Active Record
	:twitter:description: Active Record: Active Record is a design pattern commonly used in PHP development
	:twitter:creator: @exakat
	:og:title: Active Record
	:og:type: article
	:og:description: Active Record is a design pattern commonly used in PHP development
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/active-record.ini.html
	:og:locale: en


Active Record
-------------

Active Record is a design pattern commonly used in PHP development. It provides an object-oriented approach to interact with a database table or view. In the Active Record pattern, each table or view in the database is represented by a corresponding class in the PHP code.

The main purpose of Active Record is to encapsulate the database access logic within the objects themselves. This means that an Active Record object not only represents a single row of data, but it also includes methods to perform CRUD (Create, Read, Update, Delete) operations on that data.

With Active Record, developers can easily create, retrieve, update, and delete records from the database by invoking methods on the corresponding objects. The Active Record object abstracts away the SQL queries and provides a more intuitive and object-oriented way to work with the data.

Additionally, Active Record allows developers to add domain logic to the objects. This means that business rules and validations can be implemented directly within the Active Record classes. For example, you can define methods to validate input, perform calculations, or enforce certain constraints on the data.

Active Record is often used in conjunction with other design patterns, such as the Data Mapper pattern. While Active Record focuses on the direct interaction between objects and the database, the Data Mapper pattern separates the database access logic into a separate layer, providing more flexibility and decoupling between the domain objects and the persistence layer.

`Documentation <https://en.wikipedia.org/wiki/Active_record_pattern>`__

See also `Active Record <https://www.martinfowler.com/eaaCatalog/activeRecord.html>`_, `Getting started with Eloquent in Laravel: (for Beginners)syste <https://www.linkedin.com/pulse/getting-started-eloquent-laravel-beginners-youssef-saleem/>`_

Related : :ref:`Data Mapper <data-mapper>`

Related packages : `Eloquent <https://packagist.org/packages/Eloquent>`_
