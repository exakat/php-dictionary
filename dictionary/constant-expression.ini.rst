.. _constant-expression:
.. meta::
	:description:
		Constant Expression: A constant expression is an expression built with others constants and a limited subset of PHP operators.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Constant Expression
	:twitter:description: Constant Expression: A constant expression is an expression built with others constants and a limited subset of PHP operators
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Constant Expression
	:og:type: article
	:og:description: A constant expression is an expression built with others constants and a limited subset of PHP operators
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/constant-expression.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Constant Expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"A constant expression is an expression built with others constants and a limited subset of PHP operators","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Constant Expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Constant Expression
-------------------

A constant expression is an expression built with others constants and a limited subset of PHP operators. They can be used as a value for constants of default values.

.. code-block:: php
   
   <?php
   
   const A = 1;
   const B = A + 1;
   
   ?>

