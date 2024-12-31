.. _binary-operator:
.. meta::
	:description:
		Binary Operator: A binary operator is an operator that operates on a two operands.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Binary Operator
	:twitter:description: Binary Operator: A binary operator is an operator that operates on a two operands
	:twitter:creator: @exakat
	:og:title: Binary Operator
	:og:type: article
	:og:description: A binary operator is an operator that operates on a two operands
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/binary-operator.ini.html
	:og:locale: en


Binary Operator
---------------

A binary operator is an operator that operates on a two operands. It performs an operation based on the value of both operand. PHP supports several binary operators, including the following:

+ Assignation operator ``=``
+ Equality operator ``==``
+ Difference operator ``!-`` and ``<>``
+ Identity operator ``===``
+ Non-identity operator ``!==``
+ Math operators, such as addition ``+``, substraction ``-``, multiplication ``*``, division ``/``, power ``**``, modulo ``%``
+ Comparison operators, such as greater than ``>``, greater or equal than ``>=``, lesser than ``<``, lesser or equal than ``<=``
+ Concatenation, with the dot operator ``.``
+ Spaceship operator, ``<=>``
+ All the short operators, that combines a binary operation with an assignation: for example, add and assign ``+=``

And many others.


.. code-block:: php
   
   <?php
   
   $a = 1;
   $a +=2;
   var_dump($a === 3); // true
   
   ?>


Related : :ref:`Unary Operator <unary>`, :ref:`Ternary Operator <ternary>`
