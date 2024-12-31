.. _inequality:
.. meta::
	:description:
		Inequality: Inequalities are the mathematical comparison of values, with the `>`,  `>=`,  `<` and `=<` operators.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Inequality
	:twitter:description: Inequality: Inequalities are the mathematical comparison of values, with the `>`,  `>=`,  `<` and `=<` operators
	:twitter:creator: @exakat
	:og:title: Inequality
	:og:type: article
	:og:description: Inequalities are the mathematical comparison of values, with the `>`,  `>=`,  `<` and `=<` operators
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/inequality.ini.html
	:og:locale: en


Inequality
----------

Inequalities are the mathematical comparison of values, with the `>`,  `>=`,  `<` and `=<` operators. 

Unlike the equality operators, they do not have a strict version, which takes into account the type of the values. Hence, the compared values are always adapted to each other's type.



.. code-block:: php
   
   <?php
   
   // displays false
   var_dump("3" > 3);
   
   // displays true
   var_dump(4 >= 0)
   
   ?>
   


`Documentation <https://www.php.net/manual/en/language.operators.comparison.php>`__
