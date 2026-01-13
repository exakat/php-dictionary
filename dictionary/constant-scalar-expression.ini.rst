.. _constant-scalar-expression:
.. meta::
	:description:
		Constant Scalar Expression: A constant scalar expression is an expression that can be evaluated at compile time and consists only of scalar values (constants), operators.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Constant Scalar Expression
	:twitter:description: Constant Scalar Expression: A constant scalar expression is an expression that can be evaluated at compile time and consists only of scalar values (constants), operators
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Constant Scalar Expression
	:og:type: article
	:og:description: A constant scalar expression is an expression that can be evaluated at compile time and consists only of scalar values (constants), operators
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/constant-scalar-expression.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Constant Scalar Expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Nov 2025 09:19:17 +0000","dateModified":"Tue, 11 Nov 2025 09:19:17 +0000","description":"A constant scalar expression is an expression that can be evaluated at compile time and consists only of scalar values (constants), operators","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Constant Scalar Expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Constant Scalar Expression
--------------------------

A constant scalar expression is an expression that can be evaluated at compile time and consists only of scalar values (constants), operators. Constant scalar expressions are used to initialize constants, and default values for parameters and properties.

.. code-block:: php
   
   <?php
   
   const A = 1;
   const B = A + 10;
   
   ?>


`Documentation <https://wiki.php.net/rfc/const_scalar_exprs>`__

Related : :ref:`Constants <constant>`, :ref:`Parameter <parameter>`, :ref:`Scalar Types <scalar-type>`

Added in PHP 5.6+
