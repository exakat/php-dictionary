.. _arithmeticerror:
.. meta::
	:description:
		ArithmeticError Error: ``ArithmeticError`` is thrown when an error occurs while performing mathematical operations.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ArithmeticError Error
	:twitter:description: ArithmeticError Error: ``ArithmeticError`` is thrown when an error occurs while performing mathematical operations
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: ArithmeticError Error
	:og:type: article
	:og:description: ``ArithmeticError`` is thrown when an error occurs while performing mathematical operations
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/arithmeticerror.ini.html
	:og:locale: en


ArithmeticError Error
---------------------

``ArithmeticError`` is thrown when an error occurs while performing mathematical operations. These errors include attempting to perform a bitshift by a negative amount, and any call to intdiv() that would result in a value outside the possible bounds of an int. 

Currently, a bitshift is the main source for arithmetic exceptions. The other is division by zero, which is a child class.


.. code-block:: php
   
   <?php
   
   // ArithmeticError is catchable
   try {
       8 >> -1;
   } catch (ArgumentCountError) {
       print 'Cannot do a negative shift';
   }
   ?>


`Documentation <https://www.php.net/manual/en/class.arithmeticerror.php>`__

Related : :ref:`throw <throw>`, :ref:`Try-catch <try-catch>`
