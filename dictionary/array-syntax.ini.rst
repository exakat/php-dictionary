.. _array-syntax:
.. _array-notation:
.. meta::
	:description:
		Array Syntax: The array syntax is the usage of square brackets after a data container (variables, properties.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Array Syntax
	:twitter:description: Array Syntax: The array syntax is the usage of square brackets after a data container (variables, properties
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Array Syntax
	:og:type: article
	:og:description: The array syntax is the usage of square brackets after a data container (variables, properties
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array-syntax.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Array and string offset access syntax with curly braces is no longer supported.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Array and string offset access syntax with curly braces is no longer supported.html","name":"Array Syntax","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 29 Aug 2025 20:06:22 +0000","dateModified":"Fri, 29 Aug 2025 20:06:22 +0000","description":"The array syntax is the usage of square brackets after a data container (variables, properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Array Syntax.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Array Syntax
------------

The array syntax is the usage of square brackets after a data container (variables, properties...) or a literal, to access an element. It is generally known to be used with array structures, though it may also be used with strings and objects.

.. code-block:: php
   
   <?php
   
   $array = ['a', 'b', 'c'];
   echo $array[1]; // b
   
   $string = 'ABC';
   echo $string[2]; // C
   
   $object = new ArrayObject(['x', 'y', 'z']);
   print $object[0]; // x
   
   ?>


Related : :ref:`Object Syntax <object-syntax>`, :ref:`resource <resource>`, :ref:`ArrayObject <arrayobject>`
