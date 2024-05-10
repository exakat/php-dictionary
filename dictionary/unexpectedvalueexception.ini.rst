.. _unexpectedvalueexception:

UnexpectedValueException
------------------------

The UnexpectedValueException exception is thrown if a value does not match with a set of expected values.

This happens when the value is not in a list of expected values, or if it is outside an interval of validity.

This exception is mainly thrown by the Phar and SPL extensions.


.. code-block:: php
   
   <?php
   
   function foo(string $s) {
       if (empty($s)) {
          throw new \UnexpectedValueException('Foo() expects a non-empty string');
       }
   }
   ?>


`Documentation <https://www.php.net/manual/en/class.unexpectedvalueexception.php>`__

Related : :ref:`Exception <exception>`, :ref:`Phar <phar>`, :ref:`Standard PHP Library (SPL) <spl>`

Added in PHP 5.1
