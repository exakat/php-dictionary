.. _plus:

plus +
------

`+` is a native PHP operator, which has three usage : 

+ The addition, as in mathematics. This works on integers and double.
+ The merging of arrays. This merge sets the keys once, then omits the next values.
+ The + sign in front of a number, to make it explicitly positive. This is optional, and may be repeated.



.. code-block:: php
   
   <?php
   
   $a = 1 + 2; // 3
   
   $b = [1, 2] + [3, 4, 5]; // [1,2, 5]
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.arithmetic.php>`__
