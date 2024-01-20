.. _lengthexception:

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
