.. _coalesce:
.. _null-coalesce:
.. _null-ternary:

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
