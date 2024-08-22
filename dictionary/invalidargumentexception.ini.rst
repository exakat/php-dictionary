.. _invalidargumentexception:

InvalidArgumentException
------------------------

Exception thrown if an argument is not of the expected type. It is a LogicException, and it may be thrown when using SPL classes.

.. code-block:: php
   
   <?php
   
   function foo(string $a) {}
   
   // OK
   foo("abc");
   
   // KO : invalid argument
   foo(12);
   
   ?>


`Documentation <https://www.php.net/manual/en/class.invalidargumentexception.php>`__

Related : :ref:`LogicException <logicexception>`
