.. _unary:
.. _unary-operator:

Unary Operator
--------------

A unary operator is an operator that operates on a single operand. It performs an operation on the value of the operand. PHP supports several unary operators, including the following:

+ Post increment operator ``$a++``
+ Pre increment operator ``++$a``
+ Post decrement operator ``$a--``
+ Pre decrement operator ``--$a``
+ Negative operator ``-$a`` (produces the opposite of the value)
+ Logical Not operator ``!$a``
+ Bitwise Not operator ``~$a``
+ Noscream operator ``@$a``

The four first operators change the underlying value and also return the value. The three last operators only return the changed value, leaving the original value unchanged.


.. code-block:: php
   
   <?php
   
   $a = 10;
   print -$a;  // -10, $a unchanged
   print $a;   // 10
   print ++$a; // 10, $a changed
   print $a;   // 11
   
   ?>


Related : :ref:`Ternary Operator <ternary>`
