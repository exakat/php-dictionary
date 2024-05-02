.. _array-curly-braces:

Array With Curly Braces
-----------------------

Curly braces used to be a feature, used to access specific index in an array or in a string. They acted like the square braces. 

Since PHP 8.0, this is not supported anymore.


.. code-block:: php
   
   <?php
   
   $array = array('a', 'b', 'c', 'd');
   echo $array{2};    // c
   
   $string = 'abcd';
   echo $string{2};   // c
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.array.php#language.types.array.syntax.accessing>`__

See also `PHP RFC: Deprecate curly brace syntax for accessing array elements and string offsets <https://wiki.php.net/rfc/deprecate_curly_braces_array_access>`_

Removed in PHP 
