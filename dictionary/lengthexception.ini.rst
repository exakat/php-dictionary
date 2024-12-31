.. _lengthexception:
.. meta::
	:description:
		LengthException: The LengthException exception is thrown if a length is invalid.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: LengthException
	:twitter:description: LengthException: The LengthException exception is thrown if a length is invalid
	:twitter:creator: @exakat
	:og:title: LengthException
	:og:type: article
	:og:description: The LengthException exception is thrown if a length is invalid
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/lengthexception.ini.html
	:og:locale: en


LengthException
---------------

The LengthException exception is thrown if a length is invalid.

LengthException are defined by the SPL extension. It is not natively used. 

.. code-block:: php
   
   <?php
   
   function foo(string $s) {
       if (empty($s)) {
          throw new \UnexpectedValueException('Foo() expects a non-empty string');
       }
   }
   ?>


`Documentation <https://www.php.net/manual/en/class.lengthexception.php>`__

Related : :ref:`Exception <exception>`

Added in PHP 5.1
