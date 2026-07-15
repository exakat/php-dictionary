.. _algebraic-data-type:
.. _ADT:
.. meta::
	:description:
		Algebraic Data Type: An algebraic data type is a composite type built by combining simpler types through two fundamental operations: product and sum.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Algebraic Data Type
	:twitter:description: Algebraic Data Type: An algebraic data type is a composite type built by combining simpler types through two fundamental operations: product and sum
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Algebraic Data Type
	:og:type: article
	:og:description: An algebraic data type is a composite type built by combining simpler types through two fundamental operations: product and sum
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/algebraic-data-type.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/algebraic-data-type.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/algebraic-data-type.ini.html","name":"Algebraic Data Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 07:19:02 +0000","dateModified":"Thu, 09 Jul 2026 07:19:02 +0000","description":"An algebraic data type is a composite type built by combining simpler types through two fundamental operations: product and sum","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Algebraic Data Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Algebraic Data Type
-------------------

An algebraic data type is a composite type built by combining simpler types through two fundamental operations: product and sum.

A product type holds values of several types simultaneously, connected by AND. Every field is always present. A struct, record, or tuple is a product type: ``{ name: string, age: int }`` means a name AND an age, always both.

A sum type holds a value of exactly one of several alternatives, connected by OR. Only one case is active at a time, and each case may carry different data. ``Circle(Float) | Rectangle(Float, Float)`` means either a circle, with a radius, or a rectangle, with two sides, never both at once.

Full ADT systems pair sum types with exhaustive pattern matching: the compiler enforces that every case is handled, turning incomplete switches into compile-time errors.

PHP supports product types natively through classes and arrays. Sum types are approximated by union types ``int|string`` and by enums, but neither carries associated data per variant, and ``match`` does not perform exhaustive structural decomposition over union type values.

PHP does not support true ADT.

`Documentation <https://en.wikipedia.org/wiki/Algebraic_data_type>`__

See also `Algebraic data types in Wikipedia <https://en.wikipedia.org/wiki/Algebraic_data_type>`_ and `ADTs in PHP: an approximation guide <https://stitcher.io/blog/php-enums>`_.

Related : :ref:`Sum Type <sum-type>`, :ref:`Generalized Algebraic Data Type (GADT) <gadt>`, :ref:`Union Type <union-type>`, :ref:`Enumeration (enum) <enum>`, :ref:`Intersection Type <intersection-type>`, :ref:`Pattern Matching <pattern-matching>`, :ref:`Type System <type-system>`, :ref:`Generics <generics>`, :ref:`Existential Type <existential-type>`, :ref:`Higher-Kinded Type <higher-kinded-type>`, :ref:`Option Type <option-type>`, :ref:`Result Type <result-type>`, :ref:`Structural Pattern Matching <structural-pattern-matching>`
