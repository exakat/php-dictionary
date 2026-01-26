.. _depth:
.. meta::
	:description:
		Depth: Depth is a measure of how many an operation has been repeatedly applies, over and over.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Depth
	:twitter:description: Depth: Depth is a measure of how many an operation has been repeatedly applies, over and over
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Depth
	:og:type: article
	:og:description: Depth is a measure of how many an operation has been repeatedly applies, over and over
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/depth.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Depth","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 11:11:35 +0000","dateModified":"Mon, 26 Jan 2026 11:11:35 +0000","description":"Depth is a measure of how many an operation has been repeatedly applies, over and over","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Depth.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Depth
-----

Depth is a measure of how many an operation has been repeatedly applies, over and over. 

It applies to several concepts: 

+ multi-dimensional array depth: ``$array['d1']['d2']['d3']['d4']``
+ recursion depth: see example
+ nested loop depth: number of loops inside a loop
+ callstack depth: number of functions calling another one
+ object inheritance depth: the maximum number of extension levels in a class hierarchy

Depth might be limited, when it is prevented from going beyond a certain level, or unlimited, when there is no such limit. For example, xdebug offers a directive called ``xdebug.max_nesting_level`` that limits nesting depth.

.. code-block:: php
   
   <?php
   
   // The recursion depth is limited to 5
   function foo($level = 0) { 
       if ($level < 5) { 
           return foo($level + 1);
       } 
       return 1;
   }
   ?>


Related : :ref:`Callstack <callstack>`
