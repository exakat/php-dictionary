.. _unpacking:
.. _unpack:
.. meta::
	:description:
		Unpacking: Unpacking has two meanings : .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unpacking
	:twitter:description: Unpacking: Unpacking has two meanings : 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Unpacking
	:og:type: article
	:og:description: Unpacking has two meanings : 
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/unpacking.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Unpacking","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 06:47:04 +0000","dateModified":"Thu, 22 Jan 2026 06:47:04 +0000","description":"Unpacking has two meanings : ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Unpacking.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Unpacking
---------

Unpacking has two meanings : 

+ unpack(), a PHP native function, which extracts data from a binary string. It has the pack() reverse function.
+ unpacking arguments, with the ``...`` operator : turning an array into a list of arguments at call time. 



.. code-block:: php
   
   <?php
   
   // Unpacking arguments
   function foo($a, $b, $c) {
   	return $a + $b * $c;
   }
   
   $arguments = ['a' => 1, 'b' => 2, 'c' => 3];
   echo foo(...$arguments);
   // display 7
   
   ?>


Related : :ref:`Variadic <variadic>`, :ref:`Variadic <splat>`, :ref:`Variadic <spread>`
