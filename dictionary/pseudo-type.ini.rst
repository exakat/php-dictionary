.. _pseudotype:
.. meta::
	:description:
		Pseudo-type: A pseudo-type is a keyword and a type that describes an input or output, but is not an actual type.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Pseudo-type
	:twitter:description: Pseudo-type: A pseudo-type is a keyword and a type that describes an input or output, but is not an actual type
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Pseudo-type
	:og:type: article
	:og:description: A pseudo-type is a keyword and a type that describes an input or output, but is not an actual type
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pseudotype.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Pseudo-type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Sep 2025 20:02:32 +0000","dateModified":"Fri, 19 Sep 2025 20:02:32 +0000","description":"A pseudo-type is a keyword and a type that describes an input or output, but is not an actual type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Pseudo-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Pseudo-type
-----------

A pseudo-type is a keyword and a type that describes an input or output, but is not an actual type. 

For example, ``iterable`` represents both ``array`` and ``Traversable`` objects, yet a variable cannot be both, not be instantiated as such.

Union type, DNF or intersectional types are not pseudo-types, as they are made of multiple keywords.

There are several pseudo-type: ``mixed``, ``callable``, ``object``, ``iterable``.

.. code-block:: php
   
   <?php
   
   function foo(iterable $a) { }
   
   foo([]); // OK
   foo(new ArrayIterator([1])); // OK
   foo(1); // KO
   
   ?>


Related : :ref:`Mixed <mixed>`, :ref:`Iterable <iterable>`, :ref:`Callables <callable>`, :ref:`Object <object>`, :ref:`Type System <type>`
