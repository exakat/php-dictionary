.. _explicit-boolean-comparison:
.. meta::
	:description:
		Explicit Boolean Comparison: The Explicit Boolean Comparison is the syntax convention that includes a literal value when using a boolean as a condition.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Explicit Boolean Comparison
	:twitter:description: Explicit Boolean Comparison: The Explicit Boolean Comparison is the syntax convention that includes a literal value when using a boolean as a condition
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Explicit Boolean Comparison
	:og:type: article
	:og:description: The Explicit Boolean Comparison is the syntax convention that includes a literal value when using a boolean as a condition
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/explicit-boolean-comparison.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Explicit Boolean Comparison","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 12:54:21 +0000","dateModified":"Mon, 26 Jan 2026 12:54:21 +0000","description":"The Explicit Boolean Comparison is the syntax convention that includes a literal value when using a boolean as a condition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Explicit Boolean Comparison.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Explicit Boolean Comparison
---------------------------

The Explicit Boolean Comparison is the syntax convention that includes a literal value when using a boolean as a condition. 

Explicit boolean comparison may be redundant, when the compared value is already a boolean. PHP also does an implicit cast to boolean before using variables in conditions. 

On the other hand, type juggling may yield unexpected results, and lead to bugs.

.. code-block:: php
   
   <?php
   
   if ($var === true) {} 
   
   ?>

