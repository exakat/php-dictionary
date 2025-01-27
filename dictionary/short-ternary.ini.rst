.. _short-ternary:
.. _short-ternary-operator:
.. meta::
	:description:
		Short Ternary Operator: The expression ``(expr1) .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Short Ternary Operator
	:twitter:description: Short Ternary Operator: The expression ``(expr1) 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Short Ternary Operator
	:og:type: article
	:og:description: The expression ``(expr1) 
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/short-ternary.ini.html
	:og:locale: en


Short Ternary Operator
----------------------

The expression ``(expr1) ?: (expr3)`` evaluates to ``expr2`` if ``expr1`` evaluates to empty(), and ``expr3`` if ``expr1`` evaluates to false.

Is is a short version of the ternary operator, and it is often used to set default values in a concise way.


.. code-block:: php
   
   <?php
   
   $action = (empty($_POST['action'])) ?: 'default';
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary>`__

See also `Short Hand Comparison in PHP <https://stitcher.io/blog/shorthand-comparisons-in-php>`_

Related : :ref:`Ternary Operator <ternary>`, :ref:`Coalesce Operator <coalesce>`

Added in PHP 5.3+
