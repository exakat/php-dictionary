.. _temporary-expression:

Temporary Expression
--------------------

A temporary expression is an expression which is used on the spot, and will not persist later in the script.

.. code-block:: php
   
   <?php
   
   // object x is created, assigned a new value to its 'p' property, then never stored anywhere. 
   (new x)->p = 2;
   
   // x = 3 (constant assignation) would yield a syntax error
   // on the other hand, x[3] is a temporary expression, used for reading, but not available for writing.
   x[3] = 3;
   
   // x is again a constant, and it may be an object.
   x->p = 4;
   
   ?>

