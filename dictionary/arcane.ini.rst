.. _arcane:
.. meta::
	:description:
		Arcane: Arcane refers to weird features, that are almost unknown or forgotten.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Arcane
	:twitter:description: Arcane: Arcane refers to weird features, that are almost unknown or forgotten
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Arcane
	:og:type: article
	:og:description: Arcane refers to weird features, that are almost unknown or forgotten
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/arcane.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Arcane","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 15 Jan 2026 11:04:51 +0000","dateModified":"Thu, 15 Jan 2026 11:04:51 +0000","description":"Arcane refers to weird features, that are almost unknown or forgotten","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Arcane.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Arcane
------

Arcane refers to weird features, that are almost unknown or forgotten. They have been with the language since the early versions, and they are eventually removed.

+ It is possible to use ``++`` on a string containing variables. In that case, trailing letters are augmented by one. 
+ strpos() used to accept an integer as second argument: it would convert it automatically to its ASCII equivalent.

.. code-block:: php
   
   <?php
   
   $a = 'b';
   echo ++$a; // c
   
   // 98 is b
   print strpos('abc', 99); // 1
   // This was removed in PHP 8.0
   
   ?>

