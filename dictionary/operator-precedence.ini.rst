.. _operator-precedence:

Operator Precedence
-------------------

The operator precedence dictates in which order the operators in a same sequence are executed. 

For example, in the code `1 + 2 * 3`, the order is the mathematical order : multiplication has precedence over addition. The results is 7, not 9. 

In PHP, operators have different precedence : `.` (dot) has a lower priority than addition `+` and `-`.  

Precedence may lead to unexpected behavior. For example, ``-9 ** 2 == -9``, because ``-`` has lower precedence than ``**``, and PHP doesn't parse negative numbers in one pass. 

Also, `$a = $b & $c;` means that `$a = $b;`, because `=` has a higher priority than `&`.



.. code-block:: php
   
   
   <?php
   
   // 7, not 9
   $a = 1 + 2 * 3; 
   
   // 11
   $a = 4 * 2 + 3; 
   
   // equivalent to !($a instanceof aClass)
   // ! has lower precedence than instanceof
   $b = !$a instanceof aClass;
   
   ?>
   


`Documentation <https://www.php.net/manual/en/language.operators.precedence.php#language.operators.precedence>`__
