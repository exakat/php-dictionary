.. _alias-types:
.. _type-alias:

Alias Types
-----------

An alias type is a short name for several types at once. Under the hood, alias types are union type. 

PHP has some native alias types, such as iterable, which represents array | Traversable. Alias type are not available for customisation. 

The same rules applies to alias types than other types : for example, array | iterable produces a 'Duplicate type array is redundant' error.


.. code-block:: php
   
   <?php
   
   function foo(iterable $a) {
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.literal.php>`__

Related : :ref:`Scalar Types <scalar-typehint>`, :ref:`Union Type <union-type>`, :ref:`Type system <typehint>`

Added in PHP 8.0
