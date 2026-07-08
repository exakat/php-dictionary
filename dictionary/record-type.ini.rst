.. _record-type:
.. _data-class:
.. meta::
	:description:
		Record Type: A record type, also called a data class, is a construct dedicated to grouping named fields into an immutable value, with equality, hashing, and a string representation generated automatically from the field list, rather than written by hand.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Record Type
	:twitter:description: Record Type: A record type, also called a data class, is a construct dedicated to grouping named fields into an immutable value, with equality, hashing, and a string representation generated automatically from the field list, rather than written by hand
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Record Type
	:og:type: article
	:og:description: A record type, also called a data class, is a construct dedicated to grouping named fields into an immutable value, with equality, hashing, and a string representation generated automatically from the field list, rather than written by hand
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/record-type.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Record Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 15:33:46 +0000","dateModified":"Wed, 08 Jul 2026 15:33:46 +0000","description":"A record type, also called a data class, is a construct dedicated to grouping named fields into an immutable value, with equality, hashing, and a string representation generated automatically from the field list, rather than written by hand","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Record Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Record Type
-----------

A record type, also called a data class, is a construct dedicated to grouping named fields into an immutable value, with equality, hashing, and a string representation generated automatically from the field list, rather than written by hand. Examples include Java's ``record``, Kotlin's ``data class``, C#'s ``record``, and Python's ``dataclass``.

Because the compiler generates the boilerplate, a record type is meant to be declared in a single line per field, and two records are considered equal when all their fields are equal, regardless of identity, unlike ordinary objects which compare by reference by default.

PHP has no dedicated record type. A ``readonly`` class with constructor property promotion approaches the same intent: fields declared once, in the constructor signature, and never reassigned afterward. It still falls short on two points: PHP generates no value-based ``==`` semantics beyond its default shallow object comparison, and it generates no ``__toString()`` or hash from the field list, both of which must be written by hand.

.. code-block:: php
   
   <?php
   
       // Closest approximation: readonly + promoted properties.
       final class Point {
           public function __construct(
               public readonly float $x,
               public readonly float $y,
           ) {}
       }
       
       $a = new Point(1.0, 2.0);
       $b = new Point(1.0, 2.0);
       var_dump($a == $b);  // true, but by luck of default object comparison
       var_dump($a === $b); // false: identity, not value, equality
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Record_(computer_science)>`__

Related : :ref:`Readonly <readonly>`, :ref:`Struct Type <struct-type>`, :ref:`Tuple <tuple>`, :ref:`Immutable <immutable>`, :ref:`Class <class>`
