.. _naming-conflict:
.. meta::
	:description:
		Naming Conflict: A naming conflict appears when two structures of the same time are using the same name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Naming Conflict
	:twitter:description: Naming Conflict: A naming conflict appears when two structures of the same time are using the same name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Naming Conflict
	:og:type: article
	:og:description: A naming conflict appears when two structures of the same time are using the same name
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/naming-conflict.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Naming Conflict","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Jul 2025 14:04:56 +0000","dateModified":"Fri, 04 Jul 2025 14:04:56 +0000","description":"A naming conflict appears when two structures of the same time are using the same name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Naming Conflict.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Naming Conflict
---------------

A naming conflict appears when two structures of the same time are using the same name. 

This may lead to a fatal error, when the first defined structure has priority: this happens with functions, classes, etc.

It may also lead to overwriting, when the last structure can overwrite the first one. This approach is often silently executed, leading to late surprises. This is the case with array indices, variables, methods in class hierarchies, or arguments (in older versions of PHP).

Sometimes, PHP offers a mechanism to resolve conflicts. This is the case for methods in traits.

Another solution to name conflict resolution is the grouping of values: the name o


.. code-block:: php
   
   <?php
   
   $a = 1;
   $a = 2; // $a is two, the first one is forgotten
   
   function foo() {}
   function foo() {} // Fatal error
   
   ?>

