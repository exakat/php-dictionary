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
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Strict Comparison","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 03 Jan 2026 17:20:28 +0000","dateModified":"Sat, 03 Jan 2026 17:20:28 +0000","description":"Strict comparison is a comparison operator or a control structure that checks not only the value but also the type of the value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Strict Comparison.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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
