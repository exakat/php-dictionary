.. _comma:

Comma
-----

Commas are syntax elements, to separate elements when provided as a list. 

+ argument separator
+ parameter separator
+ trait name separator, in use expression
+ array element separator
+ list separator, where unused values may be omitted, leaving commas back to back.

They do not have a value by themselves.



.. code-block:: php
   
   <?php
   
   function foo($a, $b) {
       return [$a, 2, $b];
   }
   
   list($y,, $z) = foo(1, 2);
   
   ?>


Related : :ref:`Parameter <parameter>`, :ref:`Argument <argument>`, :ref:`Array <array>`, :ref:`List <list>`, :ref:`Trailing Comma <trailing-comma>`
