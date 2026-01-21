.. _iffectation:
.. meta::
	:description:
		Iffectation: An iffection is both an assignation and a condition at the same time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Iffectation
	:twitter:description: Iffectation: An iffection is both an assignation and a condition at the same time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Iffectation
	:og:type: article
	:og:description: An iffection is both an assignation and a condition at the same time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/iffectation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/syntax error, unexpected identifier \\%s\\, expecting variable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/syntax error, unexpected identifier \\%s\\, expecting variable.html","name":"Iffectation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 19 Jan 2026 14:11:17 +0000","dateModified":"Mon, 19 Jan 2026 14:11:17 +0000","description":"An iffection is both an assignation and a condition at the same time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Iffectation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Iffectation
-----------

An iffection is both an assignation and a condition at the same time. 

Assignation is a condition is debated. It makes the code less readable, as the assignation is hidden in the if condition.

It also saves some extra lines of code, when the condition applies to something that will immediately be used.

.. code-block:: php
   
   <?php
   
   if ($x = foo()) { }
   
   // same, without the iffectation
   $x = foo();
   if ($x) { }
   
   
   ?>

