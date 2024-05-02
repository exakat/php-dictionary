.. _short-ternary:
.. _short-ternary-operator:

Short Ternary Operator
----------------------

The expression ``(expr1) ?: (expr3)`` evaluates to ``expr2`` if ``expr1`` evaluates to empty(), and ``expr3`` if ``expr1`` evaluates to false.

Is is a short version of the ternary operator, and it is often used to set default values in a concise way.


.. code-block:: php
   
   <?php
   
   $action = (empty($_POST['action'])) ? 'default';
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary>`__

See also `Short Hand Comparison in PHP <https://stitcher.io/blog/shorthand-comparisons-in-php>`_

Related : :ref:`Ternary Operator <ternary>`, :ref:`Coalesce Operator <coalesce>`

Added in PHP 5.3+
