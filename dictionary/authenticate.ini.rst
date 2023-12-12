.. _authenticate:

Authenticate
------------

Functions declared with void as their return type must either omit their return statement altogether, or use an empty return statement. null is not a valid return value for a void function. 

Void function may throw exceptions or return without a parameter.

Null and void are two different notions. 


.. code-block:: php
   
   <?php
   
   function foo(&$a) : void {
       $a++;
       
       // No return used here
   }
   
   $b = 0;
   foo($b);
   
   ?>


`Documentation <https://www.php.net/manual/en/migration71.new-features.php#migration71.new-features.void-functions>`__

Related : :ref:`Null <null>`

Added in PHP 8.0
