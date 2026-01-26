.. _explicit:
.. meta::
	:description:
		Explicit: A feature is explicit when its presence is represented by source code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Explicit
	:twitter:description: Explicit: A feature is explicit when its presence is represented by source code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Explicit
	:og:type: article
	:og:description: A feature is explicit when its presence is represented by source code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/explicit.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Explicit","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 12:54:21 +0000","dateModified":"Mon, 26 Jan 2026 12:54:21 +0000","description":"A feature is explicit when its presence is represented by source code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Explicit.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Explicit
--------

A feature is explicit when its presence is represented by source code.

For example, a default value for an argument is not explicit: it may be omitted, and still be used. It is called implicit. 
If that same value is written in the calling code, even if the passed value is the same as the default value, it is now explicit, and may be read in the calling code.

.. code-block:: php
   
   <?php
   
   function foo($a = 1) {}
   
   // implicit call
   foo();
   
   // explicit calls
   foo(1);  
   foo(3);
   
   ?>


Related : :ref:`Implicit <implicit>`
