.. _identical:
.. _triple-equal:
.. meta::
	:description:
		Identical Operator: Identical is the state of two variables, which contains the same data, with the same type.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Identical Operator
	:twitter:description: Identical Operator: Identical is the state of two variables, which contains the same data, with the same type
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Identical Operator
	:og:type: article
	:og:description: Identical is the state of two variables, which contains the same data, with the same type
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/identical.ini.html
	:og:locale: en


Identical Operator
------------------

Identical is the state of two variables, which contains the same data, with the same type. It is the same as equality, without the type-juggling.

Identical operators are ``===``, `!==`. The match() command also uses identical comparisons.


.. code-block:: php
   
   <?php
   
   var_dump(0 == "0000"); // true
   var_dump(0 === "0");   // false
   var_dump(0 === 0);     // true
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.comparison.php>`__

See also `How do the PHP equality (== double equals) and identity (=== triple equals) comparison operators differ? <https://www.geeksforgeeks.org/how-do-the-php-equality-double-equals-and-identity-triple-equals-comparison-operators-differ/>`_

Related : :ref:`Comparison <comparison-operator>`
