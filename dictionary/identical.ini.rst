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
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Identical Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 28 Jan 2025 15:14:39 +0000","dateModified":"Tue, 28 Jan 2025 15:14:39 +0000","description":"Identical is the state of two variables, which contains the same data, with the same type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Identical Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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
