.. _refinement-type:
.. _predicate-type:
.. meta::
	:description:
		Refinement Type: A refinement type is a base type combined with a logical predicate that every value of that type must satisfy.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Refinement Type
	:twitter:description: Refinement Type: A refinement type is a base type combined with a logical predicate that every value of that type must satisfy
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Refinement Type
	:og:type: article
	:og:description: A refinement type is a base type combined with a logical predicate that every value of that type must satisfy
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/refinement-type.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/refinement-type.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/refinement-type.ini.html","name":"Refinement Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:49:04 +0000","dateModified":"Mon, 13 Jul 2026 18:49:04 +0000","description":"A refinement type is a base type combined with a logical predicate that every value of that type must satisfy","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Refinement Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Refinement Type
---------------

A refinement type is a base type combined with a logical predicate that every value of that type must satisfy. Instead of just ``int``, a refinement type allows ``{ x: int | x > 0 }`` meaning a positive integer, or ``{ s: string | length(s) <= 255 }`` meaning a short string. The predicate is part of the type definition and is checked statically by the type system, not at runtime.

Refinement types shift constraint validation from runtime guards into the type system itself. A function accepting a ``PositiveInt`` can never be called with a negative number without a type error; the caller must prove the precondition, typically by producing a value through a smart constructor.

Languages with native or library-based refinement type support include Liquid Haskell, via SMT-solver-backed liquid types, F*, and some dependently-typed systems. TypeScript libraries such as ``io-ts`` and ``zod`` approximate refinements at the boundary layer.

PHP does not support refinement types. The closest approximations are:

+ Value objects with a constructor that throws on invalid input, enforcing the predicate at instantiation.
+ Psalm and PHPStan assertion annotations ``@psalm-assert positive-int $n`` which let static analysis track some refinements across control flow.
+ PHP 8.0 ``assert()`` in development mode for runtime checks.

None of these approaches enforces the predicate at the type system level in a way that is verified statically across all call sites.

.. code-block:: php
   
   <?php
   
       // PHP approximation: smart constructor enforcing the predicate at runtime
       final class PositiveInt {
           public readonly int $value;
   
           private function __construct(int $value) {
               if ($value <= 0) {
                   throw new \InvalidArgumentException('Must be positive');
               }
               $this->value = $value;
           }
   
           public static function of(int $value): self {
               return new self($value);
           }
       }
   
       function divide(int $dividend, PositiveInt $divisor): float {
           return $dividend / $divisor->value;
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Refinement_type>`__

See also `Liquid Haskell <https://ucsd-progsys.github.io/liquidhaskell/>`_.

Related : :ref:`Dependent Type <dependent-type>`, :ref:`Type System <type-system>`, :ref:`Type Checking <type-checking>`, :ref:`Value Object <value-object>`, :ref:`Type Invariant <invariant>`, :ref:`Validation <validation>`, :ref:`Gradual Type Checking <gradual-type-checking>`, :ref:`Assertions <assertion>`
