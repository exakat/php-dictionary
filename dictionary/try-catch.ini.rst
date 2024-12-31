.. _try-catch:
.. _try:
.. meta::
	:description:
		Try-catch: Try-catch is a PHP command, which run a block of code, and catch some configured exceptions that the block may throw.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Try-catch
	:twitter:description: Try-catch: Try-catch is a PHP command, which run a block of code, and catch some configured exceptions that the block may throw
	:twitter:creator: @exakat
	:og:title: Try-catch
	:og:type: article
	:og:description: Try-catch is a PHP command, which run a block of code, and catch some configured exceptions that the block may throw
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/try-catch.ini.html
	:og:locale: en


Try-catch
---------

Try-catch is a PHP command, which run a block of code, and catch some configured exceptions that the block may throw. It may be completed with a finally block.

The catch clause may be anonymous, when it only specify the type of caught exception, without providing a variable name.


.. code-block:: php
   
   <?php
   
   try {
       callSomeMethod();
   } catch (\Exception $e) {
       // process the error here
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.exceptions.php>`__

See also `PHP: Try and Catch me if you can! <https://medium.com/@erlandmuchasaj/php-try-and-catch-me-if-you-can-824bc6bb6698>`_, `How to Implement Try Catch Finally Blocks in PHP <https://rollbar.com/blog/php-try-catch-finally/>`_

Related : :ref:`Finally <finally>`, :ref:`Anonymous Catch <anonymous-catch>`, :ref:`ArgumentCountError <argumentcounterror>`, :ref:`ArithmeticError Error <arithmeticerror>`, :ref:`Catch <catch>`, :ref:`Error <error>`, :ref:`Chaining Exceptions <exception-chain>`, :ref:`Exception Handler <exception-handler>`, :ref:`Exception <exception>`, :ref:`mysqli_sql_exception <mysqli_sql_exception>`, :ref:`PHP Predefined Exception <predefined-exception>`, :ref:`throw <throw>`
