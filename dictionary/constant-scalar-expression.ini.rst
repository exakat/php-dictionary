.. _constant-scalar-expression:

Constant Scalar Expression
--------------------------

A constant scalar expression is an expression that can be evaluated at compile time and consists only of scalar values (constants), operators. Constant scalar expressions are used to initialize constants, and default values for parameters and properties.

.. code-block:: php
   
   <?php
   
   const A = 1;
   const B = A + 10;
   
   ?>


`Documentation <https://wiki.php.net/rfc/const_scalar_exprs>`__

Related : :ref:`Constants <constant>`, :ref:`Parameter <parameter>`, :ref:`Scalar Types <scalar-type>`

Added in PHP 5.6+
