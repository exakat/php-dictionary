.. _precision:
.. meta::
	:description:
		precision: Precision refers to the number of digits are used to represent and display floating-point numbers.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: precision
	:twitter:description: precision: Precision refers to the number of digits are used to represent and display floating-point numbers
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: precision
	:og:type: article
	:og:description: Precision refers to the number of digits are used to represent and display floating-point numbers
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/precision.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"precision","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 03 Feb 2026 05:50:27 +0000","dateModified":"Tue, 03 Feb 2026 05:50:27 +0000","description":"Precision refers to the number of digits are used to represent and display floating-point numbers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/precision.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


precision
---------

Precision refers to the number of digits are used to represent and display floating-point numbers. The exact meaning depends a bit on the context, but it’s most commonly about float accuracy and formatting.

Precision is important when using a decimal number as an array index: the conversion is implicit, but yields a warning, nowadays.

Precision is also lost when an integer is converted to a decimal number, which may not be accurately represented.

``precision`` and ``serialize_precision`` are two PHP directives, that controls the display or conversion of numbers. 


.. code-block:: php
   
   <<?php
   
   echo 1 / 7;
   
   print PHP_EOL;
   
   ini_set('precision', 2);
   
   echo 1 / 7;
   
   ?>


Related : :ref:`integer <integer>`, :ref:`Floating Point Numbers <float>`, :ref:`PHP_INT_MAX <php_int_max>`, :ref:`PHP_INT_MIN <php_int_min>`, , 
