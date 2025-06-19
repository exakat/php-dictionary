.. _pointer:
.. meta::
	:description:
		Pointer: Pointers are a fundamental concept in programming, especially in languages like C and C++.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Pointer
	:twitter:description: Pointer: Pointers are a fundamental concept in programming, especially in languages like C and C++
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Pointer
	:og:type: article
	:og:description: Pointers are a fundamental concept in programming, especially in languages like C and C++
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pointer.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Pointer","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 17 Jun 2025 08:38:48 +0000","dateModified":"Tue, 17 Jun 2025 08:38:48 +0000","description":"Pointers are a fundamental concept in programming, especially in languages like C and C++","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Pointer.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Pointer
-------

Pointers are a fundamental concept in programming, especially in languages like C and C++. A pointer is a variable that stores the memory address of another variable.

PHP does not support a notion of pointer. The closest feature is called 'reference', yet it is quite different from pointers.

.. code-block:: php
   
   <?php
   
   $a = 1;
   $b = &$a;
   $b = 2;
   
   echo $a; // 2 
   
   ?>


Related : :ref:`References <reference>`
