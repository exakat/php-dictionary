.. _modulo:
.. meta::
	:description:
		Modulo: Modulo is the mathematical operation : it produces the remaining of the integer division of a number by another.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Modulo
	:twitter:description: Modulo: Modulo is the mathematical operation : it produces the remaining of the integer division of a number by another
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Modulo
	:og:type: article
	:og:description: Modulo is the mathematical operation : it produces the remaining of the integer division of a number by another
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/modulo.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/A non-numeric value encountered.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/A non-numeric value encountered.html","name":"Modulo","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 03 Feb 2026 06:22:35 +0000","dateModified":"Tue, 03 Feb 2026 06:22:35 +0000","description":"Modulo is the mathematical operation : it produces the remaining of the integer division of a number by another","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Modulo.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Modulo
------

Modulo is the mathematical operation : it produces the remaining of the integer division of a number by another. 

It also works with booleans and null, which are converted to integers. Other types are not allowed for modulo and yield a fatal error.

The operator for module is the percentage ``%``. The decimal division operator is slash ``/``.


.. code-block:: php
   
   <?php
   
   $a = 25 % 4; // 1
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.arithmetic.php>`__

Related : :ref:`Division <division>`, :ref:`Multiplication <multiplication>`
