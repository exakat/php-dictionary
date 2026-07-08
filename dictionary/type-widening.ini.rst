.. _type-widening:
.. _type-promotion:
.. meta::
	:description:
		Type Widening: Type widening is the conversion of a value or a declared type toward a broader, more general one: a narrower numeric type is promoted to a wider one in an expression, or a specific literal type loses its precision and is generalized to its base type once it escapes the context that produced it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Type Widening
	:twitter:description: Type Widening: Type widening is the conversion of a value or a declared type toward a broader, more general one: a narrower numeric type is promoted to a wider one in an expression, or a specific literal type loses its precision and is generalized to its base type once it escapes the context that produced it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Type Widening
	:og:type: article
	:og:description: Type widening is the conversion of a value or a declared type toward a broader, more general one: a narrower numeric type is promoted to a wider one in an expression, or a specific literal type loses its precision and is generalized to its base type once it escapes the context that produced it
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/type-widening.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Type Widening","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 15:05:25 +0000","dateModified":"Wed, 08 Jul 2026 15:05:25 +0000","description":"Type widening is the conversion of a value or a declared type toward a broader, more general one: a narrower numeric type is promoted to a wider one in an expression, or a specific literal type loses its precision and is generalized to its base type once it escapes the context that produced it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Type Widening.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Type Widening
-------------

Type widening is the conversion of a value or a declared type toward a broader, more general one: a narrower numeric type is promoted to a wider one in an expression, or a specific literal type loses its precision and is generalized to its base type once it escapes the context that produced it.

Two distinct mechanisms both go by this name:

+ Numeric widening: Java and C promote ``byte``/``short``/``int`` operands to ``long``, ``float``, or ``double`` as needed so an arithmetic operation can proceed without loss of the smaller operand's value.
+ Literal widening in type inference: TypeScript infers the literal type ``'red'`` for a ``const``, but widens it to the general type ``string`` as soon as the value is assigned to a mutable ``let`` binding, because the compiler can no longer assume the value stays that one literal.

Widening is the opposite of narrowing: narrowing makes a type more specific from context, widening makes it more general.

PHP has a limited, one-directional form of numeric widening: an ``int`` argument is silently widened to ``float`` when passed to a parameter or property declared ``float``, and this conversion is allowed even under ``declare(strict_types=1)`` as the sole documented exception to strict type checking. PHP has no literal types to widen in the TypeScript sense, and no user-visible widening between other scalar types: any other conversion, such as ``string`` to ``int``, is coercion, governed by ``strict_types``, rather than widening a value that already fits within a numeric hierarchy.

.. code-block:: php
   
   <?php
   
       declare(strict_types=1);
       
       function scale(float $factor): float {
           return $factor * 2;
       }
       
       // int is widened to float here, even under strict_types:
       // this is the one implicit conversion the engine still performs.
       echo scale(3);
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.strict>`__

See also `PHP strict_types and the int-to-float exception <https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.strict>`_, `TypeScript literal widening <https://www.typescriptlang.org/docs/handbook/type-inference.html#widening-and-narrowing-in-typescript>`_ and `Java widening primitive conversion <https://docs.oracle.com/javase/specs/jls/se17/html/jls-5.html#jls-5.1.2>`_.

Related : :ref:`Type Narrowing <type-narrowing>`, :ref:`strict_types <strict_types>`, :ref:`Cast Operator <cast>`, :ref:`Literal Types <literal-types>`, :ref:`Type System <type-system>`, :ref:`Gradual Type Checking <gradual-type-checking>`

Added in PHP 7.0
