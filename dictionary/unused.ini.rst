.. _unused:
.. meta::
	:description:
		Unused: Unused is a state of a PHP structure.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unused
	:twitter:description: Unused: Unused is a state of a PHP structure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Unused
	:og:type: article
	:og:description: Unused is a state of a PHP structure
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/unused.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Attempt to unset static property %s::$%s.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Attempt to unset static property %s::$%s.html","name":"Unused","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 06:33:09 +0000","dateModified":"Thu, 22 Jan 2026 06:33:09 +0000","description":"Unused is a state of a PHP structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Unused.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Unused
------

Unused is a state of a PHP structure. It has been declared, defined or created, but it is not used, called, read. This is characteristics of dead code.

Being unused happens to constants, variables, parameters, properties, methods, classes, traits, interfaces, use expression. 

It also happens to propagate : removing an unused function may actually create another unused function, which was only called by the first one. 


.. code-block:: php
   
   <?php
   
   const A = 1;
   const B = 2;
   
   echo A;
   
   // B is defined but not used
   
   ?>

