.. _conditional-structure:

Conditional Structures
----------------------

Conditional structures are instructions which run different code, based on a condition. 

This includes if-elsif-then, switch(), match(), the ternary operators `? ... :` and `?:` and the Coalesce operator `??`.



.. code-block:: php
   
   <?php
   
   if (!function_exists('foo')) {
       function foo() {
           // doSomething
       }
   }
   
   ?>


Related : :ref:`Switch <switch>`, :ref:`Match <match>`, :ref:`If Then Else <if-then>`, :ref:`Coalesce Operator <coalesce>`, :ref:`Ternary Operator <ternary-operator>`
