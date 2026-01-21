.. _userland:
.. meta::
	:description:
		Userland: A ``userland`` feature, or definition, is a piece of code defined with PHP code, by one of the PHP developer.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Userland
	:twitter:description: Userland: A ``userland`` feature, or definition, is a piece of code defined with PHP code, by one of the PHP developer
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Userland
	:og:type: article
	:og:description: A ``userland`` feature, or definition, is a piece of code defined with PHP code, by one of the PHP developer
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/userland.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Userland","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 19 Jan 2026 14:07:31 +0000","dateModified":"Mon, 19 Jan 2026 14:07:31 +0000","description":"A ``userland`` feature, or definition, is a piece of code defined with PHP code, by one of the PHP developer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Userland.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Userland
--------

A ``userland`` feature, or definition, is a piece of code defined with PHP code, by one of the PHP developer. ``userland`` features are opposed to ``native`` features, which are available within PHP itself.

Functions, classes, enums, traits, constants, etc. may be userland. Loaded component with composer from packagist are also userland structures. 

The main difference between userland and native features are tenuous. Though, some very specific feature may be reserved to native features. For example, magic methods are case-insensitive (and magic), while userland constant cannot be case-insensitive. This is never critical.

There are some specific guidelines for userland naming. 


.. code-block:: php
   
   <?php
   
   // foo is a userland function
   function foo() {}
   
   ?>


`Documentation <https://www.php.net/manual/en/userlandnaming.php>`__

Related : :ref:`Custom <custom>`, :ref:`Native <built-in>`
