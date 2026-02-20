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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Call to undefined function goo().html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Call to undefined function goo().html","name":"Callstack","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 18 Feb 2026 21:20:23 +0000","dateModified":"Wed, 18 Feb 2026 21:20:23 +0000","description":"Everytime a function, or method, is called, PHP enters a new context","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Callstack.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Callstack
---------

Everytime a function, or method, is called, PHP enters a new context. When the functioncall is finished, PHP exit that context. To keep track of the previous contexts, PHP stores them in a stack: that way, it pops the last context, and go on. 

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


`Documentation <https://en.wikipedia.org/wiki/Call_stack>`__

See also https://medium.com/@rob.fulwell/php-debug-backtrace-vs-debugger-call-stack-e13dbeebde71

Related : :ref:`Stack <stack>`, :ref:`Backtrace <backtrace>`, :ref:`Debugger <debug>`
