.. _coalesce:
.. _null-coalesce:
.. _null-ternary:
.. meta::
	:description:
		Coalesce Operator: The coalesce operator `.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Coalesce Operator
	:twitter:description: Coalesce Operator: The coalesce operator `
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Coalesce Operator
	:og:type: article
	:og:description: The coalesce operator `
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/coalesce.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Coalesce Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"The coalesce operator `","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Coalesce Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Coalesce Operator
-----------------

The coalesce operator `??` returns its first operand if it is set and not NULL. Otherwise it will return its second operand.

.. code-block:: php
   
   <?php
   
   class x { }
   
   // instantiation
   $x = new x;
   
   // cloning
   $y = clone $x;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.coalesce>`__

See also `Null Coalescing Operator (??) <https://riptutorial.com/php/example/7164/null-coalescing-operator----->`_, `PHP ternary operator vs null coalescing operator <https://stackoverflow.com/questions/34571330/php-ternary-operator-vs-null-coalescing-operator>`_

Related : :ref:`Ternary Operator <ternary>`, :ref:`Colon <colon>`, :ref:`If Then Else <if-then>`, :ref:`Short Ternary Operator <short-ternary>`

Added in PHP 7.0+
