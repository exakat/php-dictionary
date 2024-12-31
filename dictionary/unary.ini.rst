.. _unary:
.. _unary-operator:
.. meta::
	:description:
		Unary Operator: A unary operator is an operator that operates on a single operand.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unary Operator
	:twitter:description: Unary Operator: A unary operator is an operator that operates on a single operand
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Unary Operator
	:og:type: article
	:og:description: A unary operator is an operator that operates on a single operand
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/unary.ini.html
	:og:locale: en


Unary Operator
--------------

A unary operator is an operator that operates on a single operand. It performs an operation on the value of the operand. PHP supports several unary operators, including the following:

+ Post increment operator ``$a++``
+ Pre increment operator ``++$a``
+ Post decrement operator ``$a--``
+ Pre decrement operator ``--$a``
+ Negative operator ``-$a`` (produces the opposite of the value)
+ Logical Not operator ``!$a``
+ Bitwise Not operator ``~$a``
+ Noscream operator ``@$a``

The four first operators change the underlying value and also return the value. The three last operators only return the changed value, leaving the original value unchanged.


.. code-block:: php
   
   <?php
   
   $a = 10;
   print -$a;  // -10, $a unchanged
   print $a;   // 10
   print ++$a; // 10, $a changed
   print $a;   // 11
   
   ?>


Related : :ref:`Ternary Operator <ternary>`
