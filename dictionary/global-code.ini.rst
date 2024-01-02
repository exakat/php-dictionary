.. _global-code:

Global Code
-----------

The global code is the code that doesn't belong to any method or function. Since PHP has no main() method that is called upon execution, the global code in the first file called is used. It is responsible to make the first calls to objets and functions.

Global code is usually organised in a sequential manner. Once the bootstrapping (create th first objects, install autoload, detect environment) is done, the global code calls one object and let it handle the request.


.. code-block:: php
   
   <?php
   
   // This is the global code
   foo();
   
   function foo() {}
   
   ?>

