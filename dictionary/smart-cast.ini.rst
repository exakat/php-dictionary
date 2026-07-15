.. _smart-cast:
.. _compiler-enforced-type-narrowing:
.. meta::
	:description:
		Smart Cast: A smart cast, also called compiler-enforced type narrowing, is a feature where the compiler automatically refines the static type of a variable inside a branch, based on a preceding type-check, without requiring the programmer to insert an explicit cast expression.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Smart Cast
	:twitter:description: Smart Cast: A smart cast, also called compiler-enforced type narrowing, is a feature where the compiler automatically refines the static type of a variable inside a branch, based on a preceding type-check, without requiring the programmer to insert an explicit cast expression
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Smart Cast
	:og:type: article
	:og:description: A smart cast, also called compiler-enforced type narrowing, is a feature where the compiler automatically refines the static type of a variable inside a branch, based on a preceding type-check, without requiring the programmer to insert an explicit cast expression
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/smart-cast.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/smart-cast.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/smart-cast.ini.html","name":"Smart Cast","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 09:41:57 +0000","dateModified":"Wed, 08 Jul 2026 09:41:57 +0000","description":"A smart cast, also called compiler-enforced type narrowing, is a feature where the compiler automatically refines the static type of a variable inside a branch, based on a preceding type-check, without requiring the programmer to insert an explicit cast expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Smart Cast.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Smart Cast
----------

A smart cast, also called compiler-enforced type narrowing, is a feature where the compiler automatically refines the static type of a variable inside a branch, based on a preceding type-check, without requiring the programmer to insert an explicit cast expression.

In Kotlin, after ``if (x is String)`` the compiler knows that ``x`` is a ``String`` inside that branch, and all ``String`` methods become available without casting. In TypeScript, a type guard such as ``typeof x === 'string'`` narrows ``x`` from ``string | number`` to ``string`` in the truthy branch. In both cases the narrowing is enforced by the compiler or type-checker: code that tries to use the variable as a different type is a compile-time error.

PHP does not support smart casts. PHP's type system is verified at runtime, not compile time. Within an ``instanceof`` or ``is_string()`` branch, PHP will call the correct methods, but:

+ There is no compile-time enforcement: the type-checker integrated into IDEs can simulate narrowing, but the PHP engine itself makes no such guarantee.
+ The programmer may still write code that uses the variable as a different type, and PHP will only raise an error, or silently coerce, at runtime.
+ PHP does not have union-type narrowing built into the runtime in the sense that Kotlin's compiler tracks flow.

Static analysis tools approximate smart-cast behaviour through flow-sensitive type inference, but this is a tool-level feature, not a language-engine feature.

.. code-block:: php
   
   <?php
   
   // PHP runtime checks — no compiler-enforced narrowing.
   function process(int|string $value): string {
       if (is_string($value)) {
           // SCA will narrow $value to string here,
           // but the PHP engine itself does not enforce this at compile time.
           return strtoupper($value);
       }
   
       // $value is int here — again, tools narrow, not the engine.
       return (string) ($value * 2);
   }
   
   // instanceof narrows for IDEs and static analysers, not for the runtime.
   function describe(object $obj): string {
       if ($obj instanceof \DateTimeImmutable) {
           // Tools know $obj is DateTimeImmutable; PHP does not enforce it statically.
           return $obj->format('Y-m-d');
       }
       return get_class($obj);
   }
   
   ?>


`Documentation <https://kotlinguide.com/examples/smart-cast-example>`__

See also `Kotlin smart casts <https://kotlinlang.org/docs/typecasts.html#smart-casts>`_, `TypeScript type narrowing <https://www.typescriptlang.org/docs/handbook/2/narrowing.html>`_, `PHPStan type narrowing <https://phpstan.org/writing-php-code/narrowing-types>`_ and `Psalm – Typing in Psalm <https://psalm.dev/docs/annotating_code/type_syntax/atomic_types/>`_.

Related : :ref:`Cast Operator <cast>`, :ref:`instanceof <instanceof>`, :ref:`Property Type Declaration <type-declaration-property>`, :ref:`Typed Property <typed-property>`, :ref:`Type Narrowing <type-narrowing>`
