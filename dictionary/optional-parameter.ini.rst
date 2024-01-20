.. _optional-parameter:

Optional Parameter
------------------

Optional parameter are parameter fitted with a default value. They may then be skipped when the function is called. 

Optional parameter should be the last parameters : otherwise, PHP will have trouble figuring out which parameter uses which value.


.. code-block:: php
   
   <?php
   
   function foo($a, $b = 2) { }
   
   // $b will be 2, using the default value
   foo(1); 
   
   // $b will be 3
   foo(1, 3); 
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.arguments.php>`__
