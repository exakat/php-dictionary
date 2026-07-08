.. _tuple:
.. meta::
	:description:
		Tuple: A tuple is a fixed-size, ordered collection of values, where each position may hold a different type, and the type of the whole tuple is the sequence of its element types, such as Rust's ``(i32, String, bool)`` or Python's ``(1, 'a', True)``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Tuple
	:twitter:description: Tuple: A tuple is a fixed-size, ordered collection of values, where each position may hold a different type, and the type of the whole tuple is the sequence of its element types, such as Rust's ``(i32, String, bool)`` or Python's ``(1, 'a', True)``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Tuple
	:og:type: article
	:og:description: A tuple is a fixed-size, ordered collection of values, where each position may hold a different type, and the type of the whole tuple is the sequence of its element types, such as Rust's ``(i32, String, bool)`` or Python's ``(1, 'a', True)``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/tuple.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Tuple","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 16:10:57 +0000","dateModified":"Wed, 08 Jul 2026 16:10:57 +0000","description":"A tuple is a fixed-size, ordered collection of values, where each position may hold a different type, and the type of the whole tuple is the sequence of its element types, such as Rust's ``(i32, String, bool)`` or Python's ``(1, 'a', True)``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Tuple.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Tuple
-----

A tuple is a fixed-size, ordered collection of values, where each position may hold a different type, and the type of the whole tuple is the sequence of its element types, such as Rust's ``(i32, String, bool)`` or Python's ``(1, 'a', True)``. Unlike an array or a list, a tuple's length and per-position types are fixed at compile time, and are checked by the type system.

Tuples are typically used for lightweight, unnamed grouping of a small number of related values, such as returning two values from a function without declaring a struct or class for the purpose.

PHP has no native, typed tuple. A plain indexed array can hold mixed values at fixed positions, and list assignment ``[$a, $b] = $pair;`` can destructure it, but the array's size and per-position types are not tracked or enforced anywhere; ``array{int, string, bool}`` shapes exist only as PHPDoc annotations understood by static analyzers, not by the engine.

.. code-block:: php
   
   <?php
   
   // Untyped and unchecked: any size, any types, at any position.
   $pair = [1, 'a'];
   [$number, $letter] = $pair;
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Tuple>`__

See also `Tuple in Wikipedia <https://en.wikipedia.org/wiki/Tuple>`_.

Related : :ref:`List <list>`, :ref:`Array, [] <array>`, :ref:`Record Type <record-type>`, :ref:`Struct Type <struct-type>`, :ref:`Multiple Return Values <multiple-return-value>`
