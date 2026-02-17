.. _block:
.. meta::
	:description:
		Block: Blocks are zero, one or more instructions, grouped together with or without curly brackets.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Block
	:twitter:description: Block: Blocks are zero, one or more instructions, grouped together with or without curly brackets
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Block
	:og:type: article
	:og:description: Blocks are zero, one or more instructions, grouped together with or without curly brackets
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/block.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Block","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 12 Feb 2026 21:43:13 +0000","dateModified":"Thu, 12 Feb 2026 21:43:13 +0000","description":"Blocks are zero, one or more instructions, grouped together with or without curly brackets","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Block.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Block
-----

Blocks are zero, one or more instructions, grouped together with or without curly brackets.

A number of commands require blocks of instructions: ``namespace``, ``use``, ``function``, ``class``, ``trait``, ``interface``, ``enum``, ``closure``, ``switch``, ``match``, ``for``, ``foreach``, ``while``, ``do..while``, ``if-then``.  

Blocks may require brackets, like for ``class``, ``switch()``, ``function bodies``; they may be optional, like with ``case``, ``arrow-functions``, ``namespace`` or loops. 

A block may live on its own: it has no impact on the code, although it might be used to arbitrarily group instructions.

.. code-block:: php
   
   <?php
   
   function foo($a) {
   	if ($a) {
   		$b = 1;
   	} else 
   		$b = 2;
   		
   	return $b;
   }
   ?>


Related : :ref:`Body <body>`
