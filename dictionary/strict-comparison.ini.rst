.. _strict-comparison:
.. meta::
	:description:
		Strict Comparison: Strict comparison is a comparison operator or a control structure that checks not only the value but also the type of the value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Strict Comparison
	:twitter:description: Strict Comparison: Strict comparison is a comparison operator or a control structure that checks not only the value but also the type of the value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Strict Comparison
	:og:type: article
	:og:description: Strict comparison is a comparison operator or a control structure that checks not only the value but also the type of the value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/strict-comparison.ini.html
	:og:locale: en


Strict Comparison
-----------------

Strict comparison is a comparison operator or a control structure that checks not only the value but also the type of the value. In other words, it does not apply any type-juggling to the values before processing. 

Here are the strict operators : ``==`` may be replaced with ``===``,  ``!=`` may be replaced with ``!==``, ``switch`` may be replaced with ``match``, in_array() with the third parameter ``strict`` set to true. 



.. code-block:: php
   
   <?php
   
   //true
   var_dump(1 == "1");
   //false
   var_dump(1 === "1");
   
   //true
   var_dump(null == 0);
   //false
   var_dump(null === 0);
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.comparison.php>`__

See also `Strict vs. Loose Comparisons in PHP <https://www.copterlabs.com/strict-vs-loose-comparisons-in-php/>`_

Related : :ref:`Switch <switch>`, :ref:`Match <match>`, :ref:`Relaxed Comparison <relaxed-comparison>`
