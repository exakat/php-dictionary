.. _used:
.. meta::
	:description:
		Used: Used is a state of a PHP structure.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Used
	:twitter:description: Used: Used is a state of a PHP structure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Used
	:og:type: article
	:og:description: Used is a state of a PHP structure
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/used.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Used","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Apr 2026 05:38:14 +0000","dateModified":"Thu, 16 Apr 2026 05:38:14 +0000","description":"Used is a state of a PHP structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Used.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Used
----

Used is a state of a PHP structure. It has been declared, defined or created, but it is actually refered to in another expression. By essence, all structures should be used, as least once.

Being used happens in different ways: 

+ Constants are read
+ Variables are read, modified, unset
+ Parameters are read
+ Properties are read, modified, unset
+ Methods are called 
+ Classes are instantiated, called for their method, constants, properties
+ Traits are imported in a class or another trait
+ Interfaces are implemented, mentioned with ``instanceof`` or specified as type

``use`` expression do not garantee usage: they import a structure, and alias it, but it, too, may be unused.

Usage may depend on an initial call that is never happening in production.

.. code-block:: php
   
   <?php
   
       const A = 1;
       use const A as B;
   
       echo A;
       echo B;
   
   ?>


Related : :ref:`Unused <unused>`
