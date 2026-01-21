.. _lexical:
.. _lexical-variable:
.. meta::
	:description:
		Lexical Variable: A lexical variable is the type of variable that appears in the ``use`` part of a closure definition.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Lexical Variable
	:twitter:description: Lexical Variable: A lexical variable is the type of variable that appears in the ``use`` part of a closure definition
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Lexical Variable
	:og:type: article
	:og:description: A lexical variable is the type of variable that appears in the ``use`` part of a closure definition
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/lexical.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Lexical Variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 19 Jan 2026 14:11:49 +0000","dateModified":"Mon, 19 Jan 2026 14:11:49 +0000","description":"A lexical variable is the type of variable that appears in the ``use`` part of a closure definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Lexical Variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Lexical Variable
----------------

A lexical variable is the type of variable that appears in the ``use`` part of a closure definition. They are both variables of the current scope, which defines the closure, and parameters of the scope of the closure.

.. code-block:: php
   
   <?php
   
   $c = 1;
   
   function ($a, $b) use ($c) {
       // doSomething();
   }
   
   ?>

