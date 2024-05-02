.. _class-hoisting:

Class Hoisting
--------------

Class hoisting is a compilation mode where the declaration of functions, classes... are moved before their actual usage.

This allows the usage of functions that are declared later in the code. 

PHP doesn't do class hoisting : it does two passes on the code, and later, triggers the autoload if a class is missing. 


.. code-block:: php
   
   
   <?php
   
   // displays foo
   foo();
   
   function foo() { echo __FUNCTION__; }
   
   ?>
   


See also `Early binding in PHP <https://www.npopov.com/2021/10/20/Early-binding-in-PHP.html>`_
