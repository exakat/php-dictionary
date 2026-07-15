.. _increment:
.. meta::
	:description:
		Increment: Increment refers to the process of increasing or adding a small amount to a value, or simply one unit.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Increment
	:twitter:description: Increment: Increment refers to the process of increasing or adding a small amount to a value, or simply one unit
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Increment
	:og:type: article
	:og:description: Increment refers to the process of increasing or adding a small amount to a value, or simply one unit
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/increment.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/increment.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/increment.ini.html","name":"Increment","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 07:43:41 +0000","dateModified":"Thu, 09 Jul 2026 07:43:41 +0000","description":"Increment refers to the process of increasing or adding a small amount to a value, or simply one unit","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Increment.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Increment
---------

Increment refers to the process of increasing or adding a small amount to a value, or simply one unit.

Increments usually refers to the pre-plusplus and post-plusplus. Increment applies to numbers, both decimal and integers. It also applies to strings, though the feature has been moved to functions. Increment works on booleans: it always produces 1 first, then, since it was turned into an integer, it goes on with numbers.

.. code-block:: php
   
   <?php
   
       $a = 1;
       
       echo ++$a; // pre plus plus : displays 1, and $a ends with 2
       
       echo $a++; // post plus plus 
       
       echo $a += 1; // increment 
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Increment_and_decrement_operators>`__

Related : :ref:`Pre-increment <pre-increment>`, :ref:`Post-increment <post-increment>`, :ref:`String Increment <string-increment>`
