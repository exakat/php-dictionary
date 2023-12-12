.. _boolean:
.. _bool:

Boolean
-------

A boolean is a value that is either true or false. 

PHP's boolean are constants. They may be prefixed by ``\\``, and are case-insensitive. They can't be redefined in namespaces.

There are rules to convert any data to a boolean. 

Booleans have a related scalar typehint : ``bool``. There is also a special ``false`` typehint. 



.. code-block:: php
   
   <?php
   
   $a = True;
   $b = \FALSE;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.boolean.php>`__

Related : :ref:`Type Juggling <type-juggling>`, :ref:`Scalar Types <scalar-typehint>`
