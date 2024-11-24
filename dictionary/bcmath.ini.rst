.. _bcmath:

Bcmath
------

For arbitrary precision mathematics PHP offers BCMath which supports numbers of any size and precision up to 2147483647 (or 0x7FFFFFFF) decimal digits, if there is sufficient memory, represented as strings.

.. code-block:: php
   
   <?php
   
   echo bcpow(3, 40);  // 12157665459056928801
   echo 2 ** 40;       // 1.2157665459057E+19 (a float)
   
   ?>


`Documentation <https://www.php.net/manual/en/book.bc.php>`__

See also `A Comprehensive Guide to the PHP BCMath Library for Arbitrary Precision Arithmetic <https://reintech.io/blog/comprehensive-guide-php-bcmath-library>`_

Related packages : `krowinski/bcmath-extended <https://packagist.org/packages/krowinski/bcmath-extended>`_
