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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Increment","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Increment generally refers to the process of increasing or adding a small amount to a value, or simply one unit","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Increment.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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

