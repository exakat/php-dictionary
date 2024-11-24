.. _throw:

throw
-----

Throw is the keyword which raise an exception. 

When an exception is thrown, the normal flow of the program is interrupted, and PHP starts looking for an exception handler to catch and handle the exception.

.. code-block:: php
   
   <?php
   try{
       throw new Exception('Error');
   } catch (\Exception $e) {
       print 'Warning : error was identified!';
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.exceptions.php>`__

See also `Exceptions - PHP Advance <https://jobtensor.com/Tutorial/PHP/en/Exceptions>`_

Related : :ref:`Try-catch <try-catch>`, :ref:`Exception <exception>`, :ref:`ArgumentCountError <argumentcounterror>`, :ref:`ArithmeticError Error <arithmeticerror>`, :ref:`Error <error>`, :ref:`Chaining Exceptions <exception-chain>`, :ref:`mysqli_sql_exception <mysqli_sql_exception>`, :ref:`PHP Predefined Exception <predefined-exception>`
