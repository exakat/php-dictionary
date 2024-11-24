.. _writable:

Writable
--------

Something is writable when a new value may be assigned to it, in the correct context. For example, a variable is writable, as it may be assigned a new value in the local context.

Variable, properties (given the correct visibility), static properties, array elements are writable. 

On the other hand, constants, method calls, function calls, or instantiation are not writable: they provide a value, but do not accept to be written to.


.. code-block:: php
   
   <?php
   
   // syntax error
   new x = 3;
   
   ?>

