.. _object-syntax:
.. meta::
	:description:
		Object Syntax: The object syntax is a coding style that involves using the object operator ``->``, and, to a lesser extend, the static operator ``::``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Object Syntax
	:twitter:description: Object Syntax: The object syntax is a coding style that involves using the object operator ``->``, and, to a lesser extend, the static operator ``::``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Object Syntax
	:og:type: article
	:og:description: The object syntax is a coding style that involves using the object operator ``->``, and, to a lesser extend, the static operator ``::``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/object-syntax.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Object Syntax","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"The object syntax is a coding style that involves using the object operator ``->``, and, to a lesser extend, the static operator ``::``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Object Syntax.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Object Syntax
-------------

The object syntax is a coding style that involves using the object operator ``->``, and, to a lesser extend, the static operator ``::``.

Object syntax is often opposed to the array syntax, which relies on arrays and the square brackets ``[ ]``: it uses string index as properties and functions instead of methods.

Object syntax is also opposed to ``resource``: some PHP extensions produce resources, which are usually feed as first argument into dedicated functions. The object syntax hides the resource in an object, and makes use of method calls, with similar names and parameters.


.. code-block:: php
   
   <?php
   
   $object = new Stdclass();
   $object->property = 1;
   echo $object->property;
   
   ?>


Related : :ref:`Array Syntax <array-syntax>`, :ref:`resource <resource>`
