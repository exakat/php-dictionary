.. _execution-time:

Execution Time
--------------

Execution time is a phase of PHP processing, where the source code is executed. It highly depends on the order of execution of the instructions. 

At that time, PHP takes the commands one after the other, and execute them. It allocates memory for data, and definitions. 

Execution time is related to compile time. Objects, constants (with define()), function calls, generators, inclusion, exceptions are execution time elements.

.. code-block:: php
   
   <?php
   
   const A = 'a';
   function foo(int $a = A) {
   	echo $a;
   }
   
   foo(1);  // 1
   foo();   // Error
   //Uncaught TypeError: foo(): Argument #1 ($a) must be of type int, string given, 
   
   ?>


Related : :ref:`Compile Time <compile-time>`, :ref:`Late Static Binding <late-static-binding>`
