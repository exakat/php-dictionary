.. _bcmath:
.. meta::
	:description:
		Bcmath: For arbitrary precision mathematics PHP offers BCMath which supports numbers of any size and precision up to 2147483647 (or 0x7FFFFFFF) decimal digits, if there is sufficient memory, represented as strings.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Bcmath
	:twitter:description: Bcmath: For arbitrary precision mathematics PHP offers BCMath which supports numbers of any size and precision up to 2147483647 (or 0x7FFFFFFF) decimal digits, if there is sufficient memory, represented as strings
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Bcmath
	:og:type: article
	:og:description: For arbitrary precision mathematics PHP offers BCMath which supports numbers of any size and precision up to 2147483647 (or 0x7FFFFFFF) decimal digits, if there is sufficient memory, represented as strings
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/bcmath.ini.html
	:og:locale: en


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
