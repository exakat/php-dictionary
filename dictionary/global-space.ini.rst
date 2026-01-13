.. _global-space:
.. meta::
	:description:
		Global Space: The term "global space" refers to the global namespace "\" or the top-level scope in the PHP language.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Global Space
	:twitter:description: Global Space: The term "global space" refers to the global namespace "\" or the top-level scope in the PHP language
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Global Space
	:og:type: article
	:og:description: The term "global space" refers to the global namespace "\" or the top-level scope in the PHP language
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/global-space.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Global Space","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"The term \"global space\" refers to the global namespace \"\\\" or the top-level scope in the PHP language","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Global Space.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Global Space
------------

The term "global space" refers to the global namespace "\" or the top-level scope in the PHP language. The global space is where global variables, functions, and constants reside. When you define a variable, function, or constant without specifying a namespace, it belongs to the global space.

It is recommended to avoid using the global space for any definition: they should be stored in a custom namespace.


.. code-block:: php
   
   <?php
   
   // This is the global space
   namespace {} 
   
   ?>


`Documentation <https://www.php.net/manual/en/language.namespaces.global.php>`__
