.. _monomorphization:
.. meta::
	:description:
		Monomorphization: Monomorphization is a compile-time technique used to optimize generic or polymorphic code by generating separate, type-specific versions of a function or class for each concrete type it is used with.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Monomorphization
	:twitter:description: Monomorphization: Monomorphization is a compile-time technique used to optimize generic or polymorphic code by generating separate, type-specific versions of a function or class for each concrete type it is used with
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Monomorphization
	:og:type: article
	:og:description: Monomorphization is a compile-time technique used to optimize generic or polymorphic code by generating separate, type-specific versions of a function or class for each concrete type it is used with
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/monomorphization.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/monomorphization.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/monomorphization.ini.html","name":"Monomorphization","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:39:21 +0000","dateModified":"Sat, 11 Jul 2026 14:39:21 +0000","description":"Monomorphization is a compile-time technique used to optimize generic or polymorphic code by generating separate, type-specific versions of a function or class for each concrete type it is used with","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Monomorphization.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Monomorphization
----------------

Monomorphization is a compile-time technique used to optimize generic or polymorphic code by generating separate, type-specific versions of a function or class for each concrete type it is used with.

Instead of a single generic implementation that handles multiple types at runtime, which typically requires boxing, dynamic dispatch, or type checks, the compiler produces one specialized copy per type. Each copy is fully concrete and can be optimized independently, eliminating the overhead of indirection.

Monomorphization is the strategy used by Rust and C++ templates.

The opposite approach is called type erasure: a single generic implementation operates on a uniform representation, paying a small runtime cost in exchange for a smaller binary. Java and PHP generics proposals lean toward type erasure.

PHP does not implement monomorphization directly because it has no generics at the language level. However, PHP's JIT compiler performs a related optimization called type specialization or opcode specialization: once the runtime observes that a variable consistently holds a specific type, it emits a native-code path for that type only. This is dynamic, profile-guided monomorphization.

Understanding monomorphization helps explain both the performance ceiling of generic code in languages that support it and the design trade-offs of the JIT strategy.

`Documentation <https://en.wikipedia.org/wiki/Monomorphization>`__

See also `Rust reference: monomorphization <https://doc.rust-lang.org/reference/glossary.html#monomorphization>`_ and `PHP RFC: Generic Types and Functions <https://wiki.php.net/rfc/generics>`_.

Related : :ref:`Generics <generics>`, :ref:`Just In Time (JIT) <jit>`, :ref:`Types Erasure <type-erasure>`, :ref:`Opcode Specialisation <opcode-specialization>`, :ref:`Polymorphism <polymorphism>`, :ref:`Compile <compile>`
