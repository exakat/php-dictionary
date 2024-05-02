.. _unused:

Unused
------

Unused is a state of a PHP structure. It has been declared, defined or created, but it is used. This is characteristics of dead code.

Being unused happens to constants, variables, parameters, properties, methods, classes, traits, interfaces, use expression. 

It also happens to propagate : removing an unused function may actually create another unused function, which was only called by the first one. 


.. code-block:: php
   
   <?php
   
   const A = 1;
   const B = 2;
   
   echo A;
   
   // B is defined but not used
   
   ?>

