.. _alias:
.. meta::
	:description:
		Alias: An alias is a distinct name for an existing named structure.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Alias
	:twitter:description: Alias: An alias is a distinct name for an existing named structure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Alias
	:og:type: article
	:og:description: An alias is a distinct name for an existing named structure
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/alias.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Type iterable|array contains both iterable and array, which is redundant.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Type iterable|array contains both iterable and array, which is redundant.html","name":"Alias","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"An alias is a distinct name for an existing named structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Alias.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Alias
-----

An alias is a distinct name for an existing named structure. It is a classic way to cope with possible naming conflict, and improve readability. 

For example, there are aliases in namespaces import, to disambiguate classes, traits, interfaces, enums, functions and constants from other namespaces. There is also the class_alias() function, which allows the application-wide creation of aliases. 

There are also aliases for methods, when importing them from a trait. 

References are also considered an alias, as they stand for a variable with another name.

.. code-block:: php
   
   <?php
   
   use stdClass as StandardClass;
   
   foreach($map as $key => $value) {
   	print "$key => $value\n";
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.assignment.php>`__

Related : :ref:`Use Alias <use-alias>`, :ref:`Alias Types <type-alias>`, :ref:`Insteadof <insteadof>`, :ref:`References <reference>`
