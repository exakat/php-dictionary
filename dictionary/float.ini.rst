.. _float:
.. _double:
.. meta::
	:description:
		Floating Point Numbers: Floating point numbers (also known as \floats\, \doubles\, or \real numbers\) can be specified using a decimal dot and a mantis.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Floating Point Numbers
	:twitter:description: Floating Point Numbers: Floating point numbers (also known as \floats\, \doubles\, or \real numbers\) can be specified using a decimal dot and a mantis
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Floating Point Numbers
	:og:type: article
	:og:description: Floating point numbers (also known as \floats\, \doubles\, or \real numbers\) can be specified using a decimal dot and a mantis
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/float.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Floating Point Numbers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 17 Jan 2026 06:56:36 +0000","dateModified":"Sat, 17 Jan 2026 06:56:36 +0000","description":"Floating point numbers (also known as \\floats\\, \\doubles\\, or \\real numbers\\) can be specified using a decimal dot and a mantis","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Floating Point Numbers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Floating Point Numbers
----------------------

Floating point numbers (also known as \floats\, \doubles\, or \real numbers\) can be specified using a decimal dot and a mantis.

They may also use a number separator ``_``.

Floats used be called ``real``, though this was abandoned progressively, since PHP 7.0.

.. code-block:: php
   
   <?php
   $a = 1.234; 
   $b = 1.2e3; 
   $c = 7E-10;
   $d = 1_234.567; // as of PHP 7.4.0
   ?>


`Documentation <https://www.php.net/manual/en/language.types.float.php>`__

See also https://medium.com/@dotcom.software/floating-dangers-in-php-c4a2220bd8dc, https://0.30000000000000004.com/, https://www.geeksforgeeks.org/comparing-float-value-in-php/

Related : :ref:`Real Numbers <real>`, :ref:`Addition <addition>`, :ref:`Multiplication <multiplication>`, :ref:`Not A Number (NAN) <nan>`, :ref:`PHP_INT_MAX <php_int_max>`, :ref:`PHP_INT_MIN <php_int_min>`, :ref:`Scalar Types <scalar-type>`, :ref:`Sign <sign>`
