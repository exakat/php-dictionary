.. _isset:

Isset
-----

isset() is a function that determines if a variable is declared and is different than null.

Isset() is also related to the magic method __isset(), which is used to determine if a property in an object exists or not. 


.. code-block:: php
   
   <?php
   
   $var = 'something';
   
   if (isset($var)) {
       echo 'The variable $var contains '.$var;
   } else {
       echo 'No such variable as $var';
   }
   ?>


`Documentation <https://www.php.net/manual/en/function.isset.php>`__

Related : :ref:`Magic Methods <magic-method>`, :ref:`__isset() method <-__isset>`
