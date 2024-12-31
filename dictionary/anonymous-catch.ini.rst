.. _anonymous-catch:
.. meta::
	:description:
		Anonymous Catch: Traditionally, the catch statement requires specifying both an Exception class and an identifier variable to hold the caught exception.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Anonymous Catch
	:twitter:description: Anonymous Catch: Traditionally, the catch statement requires specifying both an Exception class and an identifier variable to hold the caught exception
	:twitter:creator: @exakat
	:og:title: Anonymous Catch
	:og:type: article
	:og:description: Traditionally, the catch statement requires specifying both an Exception class and an identifier variable to hold the caught exception
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/anonymous-catch.ini.html
	:og:locale: en


Anonymous Catch
---------------

Traditionally, the catch statement requires specifying both an Exception class and an identifier variable to hold the caught exception.

PHP 8.0 introduced a new language constructs that makes the identifier variable optional, allowing for a fully anonymous catch statement. This means there is no need to specify a variable to hold the caught exception.

The motivation behind this proposal is to simplify exception handling code, especially in cases where you don't need to use the caught exception object. It leads to cleaner and more concise code, especially when the specific details of the exception are not interesting and can just be handled generically.

.. code-block:: php
   
   <?php
   
   try {
   	$a / 0;
   } catch (DivisionByZero) {
   
   }
   
   ?>


`Documentation <https://wiki.php.net/rfc/anonymous_catch>`__

See also `PHP RFC: Support for anonymous catches <https://wiki.php.net/rfc/anonymous_catch>`_

Related : :ref:`Catch <catch>`, :ref:`Exception <exception>`, :ref:`Try-catch <try-catch>`
