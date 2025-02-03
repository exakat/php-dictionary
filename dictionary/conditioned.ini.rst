.. _conditioned:
.. meta::
	:description:
		Conditioned Structures: Conditioned structures are definitions that are placed inside a condition structure.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Conditioned Structures
	:twitter:description: Conditioned Structures: Conditioned structures are definitions that are placed inside a condition structure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Conditioned Structures
	:og:type: article
	:og:description: Conditioned structures are definitions that are placed inside a condition structure
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/conditioned.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Conditioned Structures","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Conditioned structures are definitions that are placed inside a condition structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Conditioned Structures.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Conditioned Structures
----------------------

Conditioned structures are definitions that are placed inside a condition structure. 

For example, it is possible to create a function or a class, only if it doesn't exist. 

classes, traits, interfaces, global constants (with define()), enumerations, functions may be conditioned. 

class constants, properties, methods and cases (for ``enum``) cannot be conditioned.

Conditioned structures adapt the PHP context to external condition. For example, some function may become native after a specific PHP version, and is only redefined for older installation. 

Some structures do not accept condition, such as global constants with `const` keyword (with define() function, it is OK).



.. code-block:: php
   
   <?php
   
   if (!function_exists('foo')) {
       function foo() {
           // doSomething
       }
   }
   
   ?>


Related : :ref:`Const <const>`
