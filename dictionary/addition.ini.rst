.. _addition:

Addition
--------

PHP additions apply to two different types : numbers and arrays.

For numbers, aka integers or float, this is the classic mathematical addition. 

For arrays, this is a special version of array merge : the arrays are merged, and keys are kept once they are written. This features only exists for addition and arrays. Substraction is not available. 



.. code-block:: php
   
   <?php
   
   $a = 1 + 2.3; // 3.3
   
   $b = [1] + [3, 4]; // [1, 4]
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.arithmetic.php>`__

See also `Array operators <https://www.php.net/manual/en/language.operators.array.php>`_, `Combining arrays using + versus array_merge in PHP <https://www.texelate.co.uk/blog/combining-arrays-using-plus-versus-array-merge-in-php>`_

Related : :ref:`Array <array>`, :ref:`integer <integer>`, :ref:`Floating Point Numbers <float>`
