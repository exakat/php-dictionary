.. _operand:
.. meta::
	:description:
		Operand: An operand is an argument for an operator.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Operand
	:twitter:description: Operand: An operand is an argument for an operator
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Operand
	:og:type: article
	:og:description: An operand is an argument for an operator
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/operand.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Operand","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 07 Feb 2026 21:12:18 +0000","dateModified":"Sat, 07 Feb 2026 21:12:18 +0000","description":"An operand is an argument for an operator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Operand.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Operand
-------

An operand is an argument for an operator. It applies to any of the operand: to differentiate them further, they are named with their position: first, second, etc., or their name.

.. code-block:: php
   
   <?php
   
   // One operand
   $b = !$a;
   
   // two operands
   $a = 1 + 3;
   
   // Three operands
   $c = $a ? 2 : 4;
   
   ?>


Related : :ref:`Addition <addition>`, :ref:`Unary Operator <unary>`, :ref:`Ternary Operator <ternary>`, :ref:`Bitshift Operators <bitshift>`
