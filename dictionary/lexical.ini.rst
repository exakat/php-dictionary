.. _lexical-variable:

Lexical variable
----------------

A lexical variable is the type of variable that appears in the ``use`` part of a closure definition. They are both variables of the current scope, which defines the closure, and parameters of the scope of the closure.

.. code-block:: php
   
   <?php
   
   $c = 1;
   
   function ($a, $b) use ($c) {
       // doSomething();
   }
   
   ?>

