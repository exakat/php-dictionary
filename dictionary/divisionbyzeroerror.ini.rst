.. _divisionbyzeroerror:
.. meta::
	:description:
		DivisionByZeroError: DivisionByZeroError is thrown when an attempt is made to divide a number by zero.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: DivisionByZeroError
	:twitter:description: DivisionByZeroError: DivisionByZeroError is thrown when an attempt is made to divide a number by zero
	:twitter:creator: @exakat
	:og:title: DivisionByZeroError
	:og:type: article
	:og:description: DivisionByZeroError is thrown when an attempt is made to divide a number by zero
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/divisionbyzeroerror.ini.html
	:og:locale: en


DivisionByZeroError
-------------------

DivisionByZeroError is thrown when an attempt is made to divide a number by zero. It is never possible to divide by zero, the result is undefined. It is true for all zeroes: 0, +0, -0. 

.. code-block:: php
   
   <?php
   try {
       echo 1/$a;
   }
   catch(DivisionByZeroError $e){
       echo "Trying to divide by 0";
   }
   ?>


`Documentation <https://www.php.net/manual/en/class.divisionbyzeroerror.php>`__

Related : :ref:`Error <error>`
