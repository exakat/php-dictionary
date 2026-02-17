.. _class-hoisting:
.. meta::
	:description:
		Class Hoisting: Class hoisting is a compilation mode where the declaration of functions, classes.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class Hoisting
	:twitter:description: Class Hoisting: Class hoisting is a compilation mode where the declaration of functions, classes
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Class Hoisting
	:og:type: article
	:og:description: Class hoisting is a compilation mode where the declaration of functions, classes
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/class-hoisting.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Class Hoisting","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Feb 2026 08:59:29 +0000","dateModified":"Tue, 10 Feb 2026 08:59:29 +0000","description":"Class hoisting is a compilation mode where the declaration of functions, classes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Class Hoisting.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Class Hoisting
--------------

Class hoisting is a compilation mode where the declaration of functions, classes... are moved before their actual usage.

This allows the usage of functions that are declared later in the code. 

PHP doesn't do class hoisting: it does two passes on the code, and later, triggers the autoload if a class is missing.

.. code-block:: php
   
   <?php
   
   // displays foo
   foo();
   
   function foo() { echo __FUNCTION__; }
   
   ?>


See also https://www.npopov.com/2021/10/20/Early-binding-in-PHP.html

Related : :ref:`Class Autoloading <autoload>`, :ref:`Linting <lint>`
