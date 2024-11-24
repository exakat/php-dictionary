.. _compile-time:
.. _lint-time:
.. _linting-time:

Compile Time
------------

Compile time is a phase of PHP processing, where the source code is transformed into execution commands. 

At that time, PHP figures out the syntax and code organisation, and also validates some aspects of the code, depending on the information availability. The information availability may depend on execution: for example, PHP validate interfaces when they are in the same file as the implementing class, but not when they are in different files, as autoloading() needs to happen.

In particular, during compile time, PHP has only visibility on the current constant definitions (no inclusion, no define()). It has not result from any function call, or variables. 

Compile time is related to execution time and late static binding. Attributes, default values, constants (with ``const``) are fully compile time structures.


.. code-block:: php
   
   <?php
   
   const S = 'abc'; 
   
   class y {
       const T = 'abc';
       const string U = z::A ? '2' : 'abc'; // PHP wait for z 
   }
   
   class x {
      private int $a = S;     // execution time 
      private int $b = y::T;  // compile time error
      private int $c = y::U;  // execution time error
   }
   
   ?>


Related : :ref:`Execution Time <execution-time>`, :ref:`Late Static Binding <late-static-binding>`
