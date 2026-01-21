.. _offset:
.. meta::
	:description:
		Offset: The term offset refers to the position or index of an element within an array or a string.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Offset
	:twitter:description: Offset: The term offset refers to the position or index of an element within an array or a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Offset
	:og:type: article
	:og:description: The term offset refers to the position or index of an element within an array or a string
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/offset.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Invalid Numeric Literal.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Invalid Numeric Literal.html","name":"Offset","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 07:22:11 +0000","dateModified":"Tue, 20 Jan 2026 07:22:11 +0000","description":"The term offset refers to the position or index of an element within an array or a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Offset.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Offset
------

The term offset refers to the position or index of an element within an array or a string. Offsets are usually integers.

.. code-block:: php
   
   <?php
   
   $array = ['a', 'b', 'c'];
   $offset = 1;
   echo $array[$offset];  // b
   
   $string = 'ABC';
   $offset = 2;
   echo $string[$offset];  // C
   
   ?>

