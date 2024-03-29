.. _conditioned:

Conditioned Structures
----------------------

Conditioned structures are definitions that are placed inside a condition structure. 

For example, it is possible to create a function or a class, only if it doesn't exist. 

classes, traits, interfaces, global constants (with define()), enumerations, functions may be conditioned. 

class constants, properties, methods and cases (for ``enum``) cannot be conditioned.

Conditioned structures adapt the PHP context to external condition. For example, some function may become native after a specific PHP version, and is only redefined for older installation. 

Some structures do not accept condition, such as global constants with `const` keyword (with define() function, it is OK).



.. code-block:: php
   
   <?php
   
   if (!function_exists('foo')) {
       function foo() {
           // doSomething
       }
   }
   
   ?>


Related : :ref:`Const <const>`
