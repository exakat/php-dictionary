.. _bitwise-operator:

Bitwise Operators
-----------------

Bitwise operators evaluate specific bits within an integer. 

Bitwise operators are convenient to handle bit fields. 

On the other hand, logical operators convert the whole value to bool before manipulation.


.. code-block:: php
   
   <?php
   
   $a = 3;  // binary : 11
   $b = 7;  // binary : 111
   
   print $a & $b; // 3; binary : 11
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.bitwise.php>`__

See also `Are Bitwise Operators Still Relevant in Modern PHP? <https://www.sitepoint.com/bitwise-operators-still-relevant-modern-php/>`_

Related : :ref:`Logical operators <logical-operator>`
