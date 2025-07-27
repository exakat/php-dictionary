.. _callstack:
.. meta::
	:description:
		Callstack: Everytime a function, or method, is called, PHP enters a new context.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Callstack
	:twitter:description: Callstack: Everytime a function, or method, is called, PHP enters a new context
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Callstack
	:og:type: article
	:og:description: Everytime a function, or method, is called, PHP enters a new context
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/callstack.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Callstack","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 27 Jul 2025 19:25:41 +0000","dateModified":"Sun, 27 Jul 2025 19:25:41 +0000","description":"Everytime a function, or method, is called, PHP enters a new context","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Callstack.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Callstack
---------

Everytime a function, or method, is called, PHP enters a new context. When the functioncall is finished, PHP exit that context. To keep track of the previous contexts, PHP store them in a stack: that way, it just pops the last context, and go on. 

The callstack is usually not visible explicitly. It may be accessed with the function ``debug_print_backtrace()``, for debugging purposes. 

The callstack is an important element of the execution path of PHP. In particular, the callstack should not be too deep. There are also means to limit the depth of the callstack, to avoid running into infinite recursions.

.. code-block:: php
   
   <?php
   
   function foo() {
       goo();
   }
   
   function goo() {
       hoo();
   }
   
   function hoo() {
       debug_print_backtrace();
   }
   
   foo();
   
   // Displays 
   // #0 /in/lkZjr(8): hoo()
   // #1 /in/lkZjr(4): goo()
   // #2 /in/lkZjr(15): foo()
   ?>


Related : :ref:`Stack <stack>`
