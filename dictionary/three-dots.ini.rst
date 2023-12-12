.. _three-dots:

Three dots
----------

Three dots, is an operator with several usages.

+ variadic, to make the last parameter collect all arguments in an array
+ spread, to expand elements of an array into arguments positions
+ spread in array, to merge several arrays in one
+ closure creator, when used standalone in a methodcall.



.. code-block:: php
   
   <?php
   
   $array = [1, 2, 3];
   
   // same as foo(0, 1,2, 3);
   foo(0, ...$array, 4);
   
   
   function foo($special, ...$others) {
       // with the above call
       // $special === 0
       // $others === [1, 2, 3, 4]
   }
   
   // PHP 8.1
   $closure = strlen(...);
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list>`__

Related : :ref:`Variable Arguments <variable-argument>`, :ref:`Array Spread <array-spread>`, :ref:`Ellipsis <ellipsis>`, :ref:`First Class Callable <first-class-callable>`

Added in PHP 5.6
