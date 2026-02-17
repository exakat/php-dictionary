.. _equal:
.. _double-equal:
.. _equality:
.. meta::
	:description:
		Equal Operator: Equal is the state of two variables, which contains the same data, after an optional cast to a common type.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Equal Operator
	:twitter:description: Equal Operator: Equal is the state of two variables, which contains the same data, after an optional cast to a common type
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Equal Operator
	:og:type: article
	:og:description: Equal is the state of two variables, which contains the same data, after an optional cast to a common type
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/equal.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Equal Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 09 Feb 2026 15:45:02 +0000","dateModified":"Mon, 09 Feb 2026 15:45:02 +0000","description":"Equal is the state of two variables, which contains the same data, after an optional cast to a common type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Equal Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Equal Operator
--------------

Equal is the state of two variables, which contains the same data, after an optional cast to a common type. It is the same as identical, with possible silent type-juggling.

The equal operators are ``==``, ``!=``, ``<>``, and ``<=>``. The switch() command also uses equal comparisons.

.. code-block:: php
   
   <?php
   
   var_dump(0 == '0000'); // true
   var_dump(0 == '0');    // false
   var_dump(0 == 0);      // true
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.comparison.php>`__

See also https://www.geeksforgeeks.org/how-do-the-php-equality-double-equals-and-identity-triple-equals-comparison-operators-differ/

Related : :ref:`Comparison <comparison-operator>`, :ref:`Identical Operator <identical>`
