.. _logical-operator:
.. _xor:
.. _or:
.. _and-operator:
.. _not:

Logical operators
-----------------

Logical operators applies four logical functions to booleans. 

+ ``and`` and ``&&``
+ ``or`` and ``||``
+ ``xor`` (no symbolic version for ``xor``)
+ ``!``  (no letter version for ``not``)

The logical operators are either symbolic or letter. Be aware that the symbolic operators have a higher precedence than the letter one, in particular vis-à-vis comparisons.

The logical operators work on various types, and output booleans. They are different from the bitwise operators, which work on the value as a bit level, not as a whole.

 

.. code-block:: php
   
   <?php
   
   if ($a == $b) {
       print "a and b are equal";
   }
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.comparison.php>`__

See also `Operator Precedence <https://www.php.net/manual/en/language.operators.precedence.php>`_

Related : :ref:`Bitwise Operators <bitwise-operator>`
