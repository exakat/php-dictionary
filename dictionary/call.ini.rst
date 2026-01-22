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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Call","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 09:46:52 +0000","dateModified":"Thu, 22 Jan 2026 09:46:52 +0000","description":"A call is the usage action of a definition or declaration","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Call.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Call
----

A call is the usage action of a definition or declaration. 

A call may be a function call, a method call, a static method call or a closure call. 

For example, a function is declared, then called. Calling an undefined structure is a fatal error.

A definition must happen before a call. The autoload process allows for last minute loading of a class definition. 

A call is usually done on a ``callable`` type of data.

.. code-block:: php
   
   <?php
   
   function foo() {} 
   
   // calling a function
   foo();
   
   // calling an undefined function
   goo();
   //Fatal error: Uncaught Error: Call to undefined function goo()
   
   ?>


Related : :ref:`Definition <definition>`, :ref:`Class Autoloading <autoload>`, :ref:`Callables <callable>`
