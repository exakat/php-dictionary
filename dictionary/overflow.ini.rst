.. _overflow:

Overflow
--------

Overflow happens when a value goes beyond a limit : out of its range of existence, the behavior of the value is now unknown.

Overflow happens with integers (limited to PHP_INT_MAX  and PHP_INT_MIN), floats (PHP_FLOAT_MAX and PHP_FLOAT_MIN). 

Other situations, such as accessing an array element or a string character beyond its last element, defaults to returning `null`.



.. code-block:: php
   
   <?php
   $a = PHP_INT_MAX;
   $b = (int) ($a +  1);
   
   echo $a.PHP_EOL;
   echo $b;
   
   ?>


Related : :ref:`Null <null>`, :ref:`RangeException <rangeexception>`, :ref:`Underflow <underflow>`
