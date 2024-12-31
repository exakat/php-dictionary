.. _relaxed-comparison:
.. _loose-comparison:
.. meta::
	:description:
		Relaxed Comparison: In PHP, relaxed comparison, also known as loose comparison, is a comparison style that allows for non-strict equality checks between values.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Relaxed Comparison
	:twitter:description: Relaxed Comparison: In PHP, relaxed comparison, also known as loose comparison, is a comparison style that allows for non-strict equality checks between values
	:twitter:creator: @exakat
	:og:title: Relaxed Comparison
	:og:type: article
	:og:description: In PHP, relaxed comparison, also known as loose comparison, is a comparison style that allows for non-strict equality checks between values
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/relaxed-comparison.ini.html
	:og:locale: en


Relaxed Comparison
------------------

In PHP, relaxed comparison, also known as loose comparison, is a comparison style that allows for non-strict equality checks between values. Relaxed comparison is performed using the double equals operator (==).

When using relaxed comparison (``==``), PHP will attempt to convert the operands to compatible types before comparing them. If the operands are of different types, PHP will perform type coercion to make them comparable.

Relaxed comparison is associated with ``==``, ``!=`` and ``<>``. It also applies to switch(), the spaceship operator ``<=>``, and the inequalities ``>``, ``<``, ``>=``, ``<=``. 

The contrary to relaxed comparison is the strict comparison, which includes type. 

Loose comparison is know to have changed significantly in PHP 8.0 : in particular, for special values like 0, empty string '', null and false.



.. code-block:: php
   
   <?php
   
   //true
   var_dump(1 == "1");
   //false
   var_dump(1 === "1");
   
   //false
   var_dump(1 > 'a');
   //true
   var_dump(1 < 'a');
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.comparison.php>`__

See also `Strict vs. Loose Comparisons in PHP <https://www.copterlabs.com/strict-vs-loose-comparisons-in-php/>`_

Related : :ref:`Switch <switch>`, :ref:`Strict Comparison <strict-comparison>`
