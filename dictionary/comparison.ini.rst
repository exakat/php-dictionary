.. _comparison-operator:
.. _comparison:
.. meta::
	:description:
		Comparison: Comparison operators, as their name implies, allow you to compare two values.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Comparison
	:twitter:description: Comparison: Comparison operators, as their name implies, allow you to compare two values
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Comparison
	:og:type: article
	:og:description: Comparison operators, as their name implies, allow you to compare two values
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/comparison-operator.ini.html
	:og:locale: en


Comparison
----------

Comparison operators, as their name implies, allow you to compare two values. 

PHP comparisons exists with type-juggling, `==`, `<>`, `<=>`, switch() and `!=`, and with type checks, match(), `===` and `!==`. 

Inequalities only exist with type-juggling. 

There are also functions dedicated to comparisons, with specific applications : strcmp(), strcasecmp(), strnatcasecpm(), strcoll(), similar_text(), levensthein(), bccomp(), version_compare(), hash_equals().


.. code-block:: php
   
   <?php
   
   if ($a == $b) {
       print "a and b are equal";
   }
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.comparison.php>`__

See also `PHP Variable Comparison <https://phpcheatsheets.com/compare/>`_

Related : :ref:`Operators <operator>`, :ref:`Type Juggling <type-juggling>`, :ref:`Switch <switch>`, :ref:`Match <match>`, :ref:`Spaceship Operator <spaceship>`
