.. _increment:
.. meta::
	:description:
		Increment: Increment generally refers to the process of increasing or adding a small amount to a value, or simply one unit.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Increment
	:twitter:description: Increment: Increment generally refers to the process of increasing or adding a small amount to a value, or simply one unit
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Increment
	:og:type: article
	:og:description: Increment generally refers to the process of increasing or adding a small amount to a value, or simply one unit
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/increment.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Increment","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 09 Feb 2026 15:44:22 +0000","dateModified":"Mon, 09 Feb 2026 15:44:22 +0000","description":"Increment generally refers to the process of increasing or adding a small amount to a value, or simply one unit","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Increment.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Increment
---------

Increment generally refers to the process of increasing or adding a small amount to a value, or simply one unit.

In PHP, increments usually refer to the pre-plusplus and post-plusplus.

.. code-block:: php
   
   <?php
   
   $a = 1;
   
   echo ++$a; // pre plus plus : displays 1, and $a ends with 2
   
   echo $a++; // post plus plus 
   
   echo $a += 1; // increment 
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Increment_and_decrement_operators>`__

Related : :ref:`Pre-increment <pre-increment>`, :ref:`Post-increment <post-increment>`
