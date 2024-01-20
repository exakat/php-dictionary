.. _identical:

Identical operator
------------------

Identical is the state of two variables, which contains the same data, with the same type. It is the same as equality, without the type-juggling.

Identical operators are `===`, `!==`. The match() command also uses identical comparisons.


.. code-block:: php
   
   <?php
   
   var_dump(0 == "0000"); // true
   var_dump(0 === "0");   // false
   var_dump(0 === 0);     // true
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.comparison.php>`__

See also `How do the PHP equality (== double equals) and identity (=== triple equals) comparison operators differ? <https://www.geeksforgeeks.org/how-do-the-php-equality-double-equals-and-identity-triple-equals-comparison-operators-differ/>`_

Related : :ref:`Comparison <comparison-operator>`
