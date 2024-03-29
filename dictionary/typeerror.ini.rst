.. _typeerror:

TypeError
---------

A type error refers to an error that occurs when there is a mismatch or violation of data types. It typically happens when a function or operation is performed on a value of an incompatible type. PHP is a dynamically typed language, which means that variable types can change during runtime. However, certain operations and functions expect specific types, and if the actual type doesn't match the expected type, a type error may occur.

In other situations, PHP applies some type juggling, and automatically convert the type to a suitable type. This is often the case to preserve backward compatibility, when a transparent operation make sense. 


.. code-block:: php
   
   <?php
   
   function foo(int $i) {  }
   
   try {
       foo('5');
   } catch (\TypeError $t) {
       print 'Wrong type of argument sent to foo()';
   }
   
   // PHP convert the integer 12 to the string '12', to allow the concatenation to proceed. 
   $number = 12;
   print "There are ".$number." apple in the tree.";
   
   
   ?>


`Documentation <https://www.php.net/manual/en/class.typeerror.php>`__

Related : :ref:`Error <error>`

Added in PHP 7.0
