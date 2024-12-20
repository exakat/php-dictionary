.. _ternary:
.. _ternary-operator:

Ternary Operator
----------------

The expression ``(expr1) ? (expr2) : (expr3)`` evaluates to ``expr2`` if ``expr1`` evaluates to true, and ``expr3`` if ``expr1`` evaluates to false.

.. code-block:: php
   
   <?php
   
   $action = (empty($_POST['action'])) ? 'default' : $_POST['action'];
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary>`__

See also `Ternary Operator in PHP | How to use the PHP Ternary Operator <https://www.codementor.io/@sayantinideb/ternary-operator-in-php-how-to-use-the-php-ternary-operator-x0ubd3po6>`_

Related : :ref:`Short Ternary Operator <short-ternary>`, :ref:`Short Ternary Operator <short-ternary-operator>`, :ref:`Coalesce Operator <coalesce>`, :ref:`If Then Else <if-then>`

Added in PHP 7.0+
