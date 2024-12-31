.. _coalesce:
.. _null-coalesce:
.. _null-ternary:
.. meta::
	:description:
		Coalesce Operator: The coalesce operator `.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Coalesce Operator
	:twitter:description: Coalesce Operator: The coalesce operator `
	:twitter:creator: @exakat
	:og:title: Coalesce Operator
	:og:type: article
	:og:description: The coalesce operator `
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/coalesce.ini.html
	:og:locale: en


Coalesce Operator
-----------------

The coalesce operator `??` returns its first operand if it is set and not NULL. Otherwise it will return its second operand.

.. code-block:: php
   
   <?php
   
   class x { }
   
   // instantiation
   $x = new x;
   
   // cloning
   $y = clone $x;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.coalesce>`__

See also `Null Coalescing Operator (??) <https://riptutorial.com/php/example/7164/null-coalescing-operator----->`_, `PHP ternary operator vs null coalescing operator <https://stackoverflow.com/questions/34571330/php-ternary-operator-vs-null-coalescing-operator>`_

Related : :ref:`Ternary Operator <ternary>`, :ref:`Colon <colon>`, :ref:`If Then Else <if-then>`, :ref:`Short Ternary Operator <short-ternary>`

Added in PHP 7.0+
