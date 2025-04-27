.. _call:
.. _functioncall:
.. meta::
	:description:
		Call: A call is the usage action of a definition or declaration.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Call
	:twitter:description: Call: A call is the usage action of a definition or declaration
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Call
	:og:type: article
	:og:description: A call is the usage action of a definition or declaration
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/call.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Call","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"A call is the usage action of a definition or declaration","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Call.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Call
----

A call is the usage action of a definition or declaration. 

For example, a function is declared, then called. Calling an undefined structure is a fatal error.

A definition must happen before a call. The autoload process allows for last minute loading of a class definition. 


.. code-block:: php
   
   <?php
   
   function foo() {} 
   
   // calling a function
   foo();
   
   // calling an undefined function
   goo();
   Fatal error: Uncaught Error: Call to undefined function goo()
   
   
   ?>


Related : :ref:`Definition <definition>`, :ref:`Class Autoloading <autoload>`
