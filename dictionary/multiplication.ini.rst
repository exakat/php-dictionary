.. _multiplication:
.. meta::
	:description:
		Multiplication: Multiplication is the mathematical multiplication.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Multiplication
	:twitter:description: Multiplication: Multiplication is the mathematical multiplication
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Multiplication
	:og:type: article
	:og:description: Multiplication is the mathematical multiplication
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/multiplication.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Multiplication","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 07:20:47 +0000","dateModified":"Tue, 20 Jan 2026 07:20:47 +0000","description":"Multiplication is the mathematical multiplication","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Multiplication.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Multiplication
--------------

Multiplication is the mathematical multiplication. It applies to numbers: integers and float. 

It also works with booleans and null, which are converted to integers. Other types are not allowed for multiplication and yield a fatal error.

.. code-block:: php
   
   <?php
   
   $a = 10 * 2.3; // 23.0
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.arithmetic.php>`__

See also https://www.php.net/manual/en/language.operators.array.php, https://www.texelate.co.uk/blog/combining-arrays-using-plus-versus-array-merge-in-php

Related : :ref:`Array <array>`, :ref:`integer <integer>`, :ref:`Floating Point Numbers <float>`
