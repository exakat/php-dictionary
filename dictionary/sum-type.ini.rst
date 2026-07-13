.. _sum-type:
.. _discriminated-union:
.. _tagged-union:
.. _variant-type:
.. meta::
	:description:
		Sum Type: A sum type is a type whose value is exactly one of a fixed set of cases, where each case may carry a different payload.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Sum Type
	:twitter:description: Sum Type: A sum type is a type whose value is exactly one of a fixed set of cases, where each case may carry a different payload
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Sum Type
	:og:type: article
	:og:description: A sum type is a type whose value is exactly one of a fixed set of cases, where each case may carry a different payload
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sum-type.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Sum Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:14:56 +0000","dateModified":"Fri, 10 Jul 2026 09:14:56 +0000","description":"A sum type is a type whose value is exactly one of a fixed set of cases, where each case may carry a different payload","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Sum Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Sum Type
--------

A sum type is a type whose value is exactly one of a fixed set of cases, where each case may carry a different payload. It is the OR half of algebraic data types, as distinct from product types which represent AND.

In Haskell: ``data Shape = Circle Double | Rectangle Double Double``. In Rust: ``enum Shape { Circle(f64), Rectangle(f64, f64) }``. In each language the case name acts as a tag, and the type system tracks which case is active, enabling exhaustive, type-safe dispatch.

PHP union types, such as ``int|string``, share the OR semantics but are not true sum types: they carry no tag, they do not associate different payloads with different arms, and ``match`` cannot decompose them structurally. PHP enums without backing are the closest PHP equivalent for pure tag-only sum types, but they cannot attach variant-specific associated data.

The standard PHP workaround is a sealed class hierarchy: an abstract base class with one concrete subclass per variant, each holding its own fields. ``instanceof`` checks and ``match`` on class strings approximate discriminated dispatch, but the compiler does not enforce exhaustiveness.

PHP does not suport sum types.

.. code-block:: php
   
   <?php
   
       // PHP workaround: sealed class hierarchy as a sum type approximation
       abstract class Shape {}
   
       final class Circle extends Shape {
           public function __construct(public readonly float $radius) {}
       }
   
       final class Rectangle extends Shape {
           public function __construct(
               public readonly float $width,
               public readonly float $height,
           ) {}
       }
   
       function area(Shape $shape): float {
           return match (true) {
               $shape instanceof Circle    => M_PI * $shape->radius ** 2,
               $shape instanceof Rectangle => $shape->width * $shape->height,
               // PHP will not warn if a new subclass is added and not handled here
           };
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Tagged_union>`__

See also `PHP RFC: Sealed classes <https://wiki.php.net/rfc/sealed_classes>`_.

Related : :ref:`Algebraic Data Type <algebraic-data-type>`, :ref:`Generalized Algebraic Data Type (GADT) <gadt>`, :ref:`Union Type <union-type>`, :ref:`Enumeration (enum) <enum>`, :ref:`Backed Enum <backed-enum>`, :ref:`Pattern Matching <pattern-matching>`, :ref:`Match <match>`, :ref:`instanceof <instanceof>`, :ref:`Sealed Class <sealed-class>`
