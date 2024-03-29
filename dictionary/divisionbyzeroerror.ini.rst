.. _divisionbyzeroerror:

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
