.. _structural-pattern-matching:
.. meta::
	:description:
		Structural Pattern Matching: Structural pattern matching, found in Rust, Haskell, Scala, and OCaml, matches a value against a shape that mirrors the value's own structure, and simultaneously binds the pieces it finds to new variables.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Structural Pattern Matching
	:twitter:description: Structural Pattern Matching: Structural pattern matching, found in Rust, Haskell, Scala, and OCaml, matches a value against a shape that mirrors the value's own structure, and simultaneously binds the pieces it finds to new variables
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Structural Pattern Matching
	:og:type: article
	:og:description: Structural pattern matching, found in Rust, Haskell, Scala, and OCaml, matches a value against a shape that mirrors the value's own structure, and simultaneously binds the pieces it finds to new variables
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/structural-pattern-matching.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/structural-pattern-matching.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/structural-pattern-matching.ini.html","name":"Structural Pattern Matching","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 15:22:57 +0000","dateModified":"Wed, 08 Jul 2026 15:22:57 +0000","description":"Structural pattern matching, found in Rust, Haskell, Scala, and OCaml, matches a value against a shape that mirrors the value's own structure, and simultaneously binds the pieces it finds to new variables","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Structural Pattern Matching.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Structural Pattern Matching
---------------------------

Structural pattern matching, found in Rust, Haskell, Scala, and OCaml, matches a value against a shape that mirrors the value's own structure, and simultaneously binds the pieces it finds to new variables. A pattern such as ``Some(Point { x, y })`` both checks that the value is the ``Some`` case of an option, wrapping a ``Point``, and extracts ``x`` and ``y`` in a single step; matches are typically checked exhaustively by the compiler, which rejects code that omits a possible case.

This differs from plain destructuring, which only extracts values assuming the shape is already known to match, and from PHP's own ``match`` expression, which compares a scalar subject against literal values or ranges, but cannot look inside a value's structure or bind its sub-parts.

PHP has no structural pattern matching: it is being in the works for the future, like PHP 9.0. The ``match`` expression compares a value with ``===`` against a flat list of candidates; it cannot descend into an array's or object's fields, cannot bind sub-values to variables as part of the comparison, and enforces no exhaustiveness over a class hierarchy or enum's cases beyond throwing ``UnhandledMatchError`` at runtime for unmatched inputs. Extracting values still requires a separate destructuring step, such as list assignment, done after the fact and unconditionally.

.. code-block:: php
   
   <?php
   
       // match() compares scalars; it cannot destructure $shape's fields.
       $area = match (true) {
           $shape instanceof Circle => M_PI * $shape->radius ** 2,
           $shape instanceof Rectangle => $shape->width * $shape->height,
           default => throw new UnhandledMatchError('unknown shape'),
       };
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Pattern_matching>`__

Related : :ref:`Pattern Matching <pattern-matching>`, :ref:`Algebraic Data Type <algebraic-data-type>`, :ref:`Sum Type <sum-type>`, :ref:`List <list>`
