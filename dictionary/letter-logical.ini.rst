.. _letter-logical:

Letter Logical Bug
------------------

PHP offers two sets of operators for logical operations : the letter operators (and, or, xor) and the symbol operators (&&, ||, no xor in symbol).

While they do the same, those operators have a difference : they do not share the same precedence. In particular, && has higher priority than = while = has higher priority than and. This leads to a difference in execution.

When combining ``=`` and ``&&``, the logical operation happens before the assignation. While combining ``=`` and ``and`` actually ignore the logical operation.

The same problem affect yield, yield from, print, all assignations, including the short assignations, the ternary operator and the null-coalesce. 

It is recommended to always use the symbol logical operators, which is closer to human expectations. 


.. code-block:: php
   
   <?php
   
   $a = 1 && 3;
   
   $b = 1 and 3;
   // equivalent to 
   ($b = 1) and 3;
   
   var_dump($a); // true
   var_dump($b); // 1
   
   ?>


`Documentation <https://bugs.php.net/bug.php?id=10162>`__
