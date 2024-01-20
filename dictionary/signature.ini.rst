.. _signature:

Signature
---------

The signature of a method or a function is the list of arguments and constraints that applies when calling it. 

In its simplest form, signature of a method is its name, its argument's type and list, though modern syntax also include default values, visibilities, attributes and parameter names.


.. code-block:: php
   
   <?php
   
   function foo(string &$s = 'abc') {}
   
   ?>
   


`Documentation <https://www.php.net/manual/en/functions.arguments.php>`__
