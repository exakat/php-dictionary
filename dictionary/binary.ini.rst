.. _binary:

Binary
------

Binary has several distinct usages: 

+ binary integers, which is a way to represent numbers with 0 and 1
+ binary operators, which are operators that uses 2 arguments
+ binary search, a search technic over a sorted array
+ binary executable: the compiled version of PHP, not as source code

Generaly, binary refers to the binary integers.


.. code-block:: php
   
   <?php
   
   // 12 in binary 
   $binary = 0b1100;
   
   // > is a binary operator: it takes 2 arguments
   var_dump($binary > 13);
   
   ?>


Related : :ref:`Binary Integer <binary-integer>`, :ref:`Binary Operator <binary-operator>`
