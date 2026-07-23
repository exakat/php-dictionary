.. _comma:
.. meta::
	:description:
		Comma: Commas are syntax elements, to separate elements when provided as a list.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Comma
	:twitter:description: Comma: Commas are syntax elements, to separate elements when provided as a list
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Comma
	:og:type: article
	:og:description: Commas are syntax elements, to separate elements when provided as a list
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/comma.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/comma.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/comma.ini.html","name":"Comma","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 08:24:47 +0000","dateModified":"Mon, 20 Jul 2026 08:24:47 +0000","description":"Commas are syntax elements, to separate elements when provided as a list","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Comma.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Comma
-----

Commas are syntax elements, to separate elements when provided as a list. 

+ Argument separator
+ Parameter separator
+ Trait name separator, in use expression
+ Array element separator
+ List separator, where unused values may be omitted, leaving commas back to back.

They do not have a value by themselves.

.. code-block:: php
   
   <?php
   
   function foo($a, $b) {
       return [$a, 2, $b];
   }
   
   list($y,, $z) = foo(1, 2);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Comma>`__

Related : :ref:`Parameter <parameter>`, :ref:`Argument <argument>`, :ref:`Array, [] <array>`, :ref:`List <list>`, :ref:`Trailing Comma <trailing-comma>`
