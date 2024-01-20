.. _orm:

Object Relational Mapping (ORM)
-------------------------------

Object Relational Mapping is a tool that bridges the OOP world to databases (in general, and SQL in particular).

As its definition implies, such tool is able to take data from an object, and place it in a database's table. The transfer may be straightforward, when the object is stored in one table. Or, it may be complex, when the same data are spread over multiple tables. 

PHP has several ORM : Doctrine, Redbean, Eloquent, Propel.

`Documentation <https://en.wikipedia.org/wiki/Object%E2%80%93relational_mapping>`__

See also `PDO in PHP <https://www.php.net/manual/en/intro.pdo.php>`_

Related : :ref:`Database Abstraction Layer (DBAL) <dbal>`, :ref:`Data Mapper <object-mapper>`

Related packages : `doctrine/orm <https://packagist.org/packages/doctrine/orm>`_, `illuminate/database <https://packagist.org/packages/illuminate/database>`_, `propel/propel <https://packagist.org/packages/propel/propel>`_, `gabordemooij/redbean <https://packagist.org/packages/gabordemooij/redbean>`_
