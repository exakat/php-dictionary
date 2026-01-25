.. _ternary:
.. _ternary-operator:
.. meta::
	:description:
		Ternary Operator: The expression ``(expr1) .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Ternary Operator
	:twitter:description: Ternary Operator: The expression ``(expr1) 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Ternary Operator
	:og:type: article
	:og:description: The expression ``(expr1) 
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/ternary.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Ternary Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 12:49:55 +0000","dateModified":"Thu, 22 Jan 2026 12:49:55 +0000","description":"The expression ``(expr1) ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Ternary Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Ternary Operator
----------------

The expression ``(expr1) ? (expr2) : (expr3)`` evaluates to ``expr2`` if ``expr1`` evaluates to true, and ``expr3`` if ``expr1`` evaluates to false.

.. code-block:: php
   
   <?php
   
   $action = (empty($_POST['action'])) ? 'default' : $_POST['action'];
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary>`__

See also `Ternary Operator in PHP | How to use the PHP Ternary Operator <https://www.codementor.io/@sayantinideb/ternary-operator-in-php-how-to-use-the-php-ternary-operator-x0ubd3po6>`_

Related : :ref:`Short Ternary Operator <short-ternary>`, :ref:`Short Ternary Operator <short-ternary-operator>`, :ref:`Coalesce Operator <coalesce>`, :ref:`If Then Else <if-then>`, :ref:`Binary Operator <binary-operator>`, :ref:`Colon <colon>`, :ref:`Operand <operand>`, :ref:`Unary Operator <unary>`

Added in PHP 7.0+
