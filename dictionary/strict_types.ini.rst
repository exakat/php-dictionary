.. _strict_types:

strict_types
------------

strict_types is an execution directive, that makes PHP more strict when applying the types. In particular, it doesn't cast values automatically, but raise an error. 

``strict_types`` is an option per file, and is set with the declare() function.


.. code-block:: php
   
   <?php
   declare(strict_types=1);
   
   function foo(int $a) {}
   
   foo(1);
   foo(1.3);
   //Fatal error: Uncaught TypeError: foo(): Argument #1 ($a) must be of type int, float given,
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.strict>`__

See also `PHP strict_types <https://www.phptutorial.net/php-tutorial/php-strict_types/>`_, `The way declare(strict_types=1) works in PHP <https://dev.to/rocksheep/the-way-stricttypes-works-in-php-eb7>`_

Related : :ref:`Type system <type>`

Added in PHP 7.0
