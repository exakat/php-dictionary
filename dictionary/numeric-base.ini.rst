.. _numeric-base:
.. meta::
	:description:
		Numeric Base: The numeric base is the number of digits to be used when counting.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Numeric Base
	:twitter:description: Numeric Base: The numeric base is the number of digits to be used when counting
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Numeric Base
	:og:type: article
	:og:description: The numeric base is the number of digits to be used when counting
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/numeric-base.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Numeric Base","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 10 Apr 2025 20:51:35 +0000","dateModified":"Thu, 10 Apr 2025 20:51:35 +0000","description":"The numeric base is the number of digits to be used when counting","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Numeric Base.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Numeric Base
------------

The numeric base is the number of digits to be used when counting. The most common bases are: binary (0, 1), octal (0 to 7), decimal (0 to 9), duodecimal (0 to 11), hexadecimal (0 to F, aka 15).

All other bases, starting from 2, are possible.

In computer science, base 2, 10 and 16 are quite common, and require conversion from one another.

.. code-block:: php
   
   <?php
   
   $number = '1234';
   echo base_convert($number, 10, 8);  // 2322
   echo base_convert($number, 10, 12); // 86a
   echo base_convert($number, 10, 16); // 4d2
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Radix>`__
