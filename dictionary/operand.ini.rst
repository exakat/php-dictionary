.. _operand:
.. meta::
	:description:
		Operand: An operand is an argument for an operator.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Operand
	:twitter:description: Operand: An operand is an argument for an operator
	:twitter:creator: @exakat
	:og:title: Operand
	:og:type: article
	:og:description: An operand is an argument for an operator
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/operand.ini.html
	:og:locale: en


Operand
-------

An operand is an argument for an operator. It applies to any of the operand: to differentiate them later, they are named with their position (first, second, etc.), or their name.

.. code-block:: php
   
   <?php
   
   // One operand
   $b = !$a;
   
   // two operands
   $a = 1 + 3;
   
   // Three operands
   $c = $a ? 2 : 4;
   
   ?>


Related : :ref:`Addition <addition>`, :ref:`Unary Operator <unary>`, :ref:`Ternary Operator <ternary>`, :ref:`Bitshift Operators <bitshift>`
