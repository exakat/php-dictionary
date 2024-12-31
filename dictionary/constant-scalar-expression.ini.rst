.. _constant-scalar-expression:
.. _static-constant-expression:
.. meta::
	:description:
		Constant Scalar Expression: A constant scalar expression is an expression that can be evaluated at compile time and consists only of scalar values (constants), operators.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Constant Scalar Expression
	:twitter:description: Constant Scalar Expression: A constant scalar expression is an expression that can be evaluated at compile time and consists only of scalar values (constants), operators
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Constant Scalar Expression
	:og:type: article
	:og:description: A constant scalar expression is an expression that can be evaluated at compile time and consists only of scalar values (constants), operators
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/constant-scalar-expression.ini.html
	:og:locale: en


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
