.. _cast:

Cast Operator
-------------

Cast operators change the type of the variable to the desired type. Conversion between the current format and the target format may happen. 

The available casts are:

(int), (integer) - cast to integer
(bool), (boolean) - cast to boolean
(float), (double), (real) - cast to float
(string) - cast to string
(array) - cast to array
(object) - cast to object
(unset) - cast to NULL (Deprecated since PHP 7.2)

There is no operator to convert to a specific class type.



.. code-block:: php
   
   <?php
   $foo = 10;   // $foo is an integer
   $bar = (boolean) $foo;   // $bar is a boolean
   ?>


`Documentation <https://www.php.net/manual/en/language.types.type-juggling.php#language.types.typecasting>`__

See also `PHP Type Casting <https://tutorials.supunkavinda.blog/php/type-casting>`_
