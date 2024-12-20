.. _nullable:

Nullable
--------

Nullable is the name of the NULL value, when used as a type. Until PHP 8.0, it was marked as a question mark with types, and since PHP 8.0, it is also marked with its own name, as an union type. 

.. code-block:: php
   
   <?php
   
   function foo(?A $a) : null | B {
       // code
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.null.php>`__

See also `Dealing with null <https://front-line-php.com/dealing-with-null>`_

Related : :ref:`Null <null>`, :ref:`Type System <type>`, :ref:`Contravariance <type-contravariance>`

Added in PHP 7.1
