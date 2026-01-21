.. _global-code:
.. meta::
	:description:
		Global Code: The global code is the code that doesn't belong to any method or function.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Global Code
	:twitter:description: Global Code: The global code is the code that doesn't belong to any method or function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Global Code
	:og:type: article
	:og:description: The global code is the code that doesn't belong to any method or function
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/global-code.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Global Code","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 17 Jan 2026 06:56:44 +0000","dateModified":"Sat, 17 Jan 2026 06:56:44 +0000","description":"The global code is the code that doesn't belong to any method or function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Global Code.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Global Code
-----------

The global code is the code that doesn't belong to any method or function. Since PHP has no main() method that is called upon execution, the global code in the first file called is used. It is responsible to make the first calls to objects and functions.

Global code is usually organised in a sequential manner. Once the bootstrapping (create th first objects, install autoload, detect environment) is done, the global code calls one object and let it handle the request.

.. code-block:: php
   
   <?php
   
   // This is the global code
   foo();
   
   function foo() {}
   
   ?>

