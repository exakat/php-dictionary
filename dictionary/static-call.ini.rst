.. _static-call:
.. meta::
	:description:
		Static Call: A static call is a call to a structure, where the name of the structure is hardcoded.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Static Call
	:twitter:description: Static Call: A static call is a call to a structure, where the name of the structure is hardcoded
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Static Call
	:og:type: article
	:og:description: A static call is a call to a structure, where the name of the structure is hardcoded
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/static-call.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Static Call","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"A static call is a call to a structure, where the name of the structure is hardcoded","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Static Call.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Static Call
-----------

A static call is a call to a structure, where the name of the structure is hardcoded.

A static method may be called with a static call, or with a dynamic call. Both are valid.

.. code-block:: php
   
   <?php
   
       class X {
           static function foo() {}
       }
       
       new X(); // static call
       
       $class = X::class;
       new $class(); // dynamic call
       
       X::foo(); // static call of a static method
       $class::foo(); // dynamic call of a static method
   
   ?>


Related : :ref:`new <new>`, :ref:`Dynamic Call <dynamic-call>`
