.. _integer:
.. _int:
.. meta::
	:description:
		integer: An int is a number of the set ℤ = {.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: integer
	:twitter:description: integer: An int is a number of the set ℤ = {
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: integer
	:og:type: article
	:og:description: An int is a number of the set ℤ = {
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/integer.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"integer","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"An int is a number of the set \u2124 = {","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/integer.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


integer
-------

An int is a number of the set ℤ = {..., -2, -1, 0, 1, 2, ...}. It is limited by PHP_INT_MIN (lower bound) and PHP_INT_MAX (upper bound). 

Integers have several syntaxes : they may be written in binary, octal, decimal, hexadecimal and with `_` as a separator. 


.. code-block:: php
   
   <?php
   
   $a = 1234;       // decimal number
   $a = 0123;       // octal number (equivalent to 83 decimal)
   $a = 0o123;      // octal number (as of PHP 8.1.0)
   $a = 0x1A;       // hexadecimal number (equivalent to 26 decimal)
   $a = 0b11111111; // binary number (equivalent to 255 decimal)
   $a = 1_234_567;  // decimal number (as of PHP 7.4.0)
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.integer.php>`__

Related : :ref:`Addition <addition>`, :ref:`Binary Integer <binary-integer>`, :ref:`Multiplication <multiplication>`, :ref:`Numeric Separator <numeric-separator>`, :ref:`Octal Integer <octal-integer>`, :ref:`Scalar Types <scalar-type>`, :ref:`Sign <sign>`
