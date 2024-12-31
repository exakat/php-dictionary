.. _idempotent:
.. meta::
	:description:
		Idempotent: Idempotent is said of an operation, which yields always the same result after the first call.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Idempotent
	:twitter:description: Idempotent: Idempotent is said of an operation, which yields always the same result after the first call
	:twitter:creator: @exakat
	:og:title: Idempotent
	:og:type: article
	:og:description: Idempotent is said of an operation, which yields always the same result after the first call
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/idempotent.ini.html
	:og:locale: en


Idempotent
----------

Idempotent is said of an operation, which yields always the same result after the first call.  In other words, repeating the operation does not produce a different result beyond the initial application.

This is the case of strtolower() and strtoupper(): once the string has been made lower case (resp. upper case), calling the same function again on the string will not change the result.


.. code-block:: php
   
   <?php
   
   $string = aBC;
   
   $string1 = strtolower($string); // abc
   $string2 = strtolower($string2); // abc
   $string3 = strtolower($string3); // abc
   $string4 = strtolower($string4); // abc
   // ... 
   
   ?>

