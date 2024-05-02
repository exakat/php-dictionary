.. _case-sensitivity:

Case Sensitivity
----------------

Case sensitivity refers to the way PHP retrieves names when it looks for a definition: is it in a case-sensitive way, or case insensitive.

The case insensitive named structures are: 

+ classes
+ enumerations
+ functions
+ interfaces
+ magic methods
+ methods
+ namespaces
+ php keywords
+ traits

The case sensitive named structures are: 

+ class constants
+ constants (since PHP 8.0)
+ array index
+ properties
+ variables



.. code-block:: php
   
   <?php
   
   // two distinct variables
   $x = 1;
   $X = 2;
   
   // two identical calls
   foo();
   FOO();
   
   ?>

