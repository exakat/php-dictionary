.. _linear-type:
.. _affine-type:
.. _ownership-type:
.. meta::
	:description:
		Linear Type: Linear types and affine types are type disciplines that constrain how many times a value may be used.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Linear Type
	:twitter:description: Linear Type: Linear types and affine types are type disciplines that constrain how many times a value may be used
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Linear Type
	:og:type: article
	:og:description: Linear types and affine types are type disciplines that constrain how many times a value may be used
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/linear-type.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Linear Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 07:47:04 +0000","dateModified":"Tue, 07 Jul 2026 07:47:04 +0000","description":"Linear types and affine types are type disciplines that constrain how many times a value may be used","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Linear Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Linear Type
-----------

Linear types and affine types are type disciplines that constrain how many times a value may be used.

A linear type requires that a value is used exactly once: it must be consumed, neither discarded nor duplicated. This mirrors the mathematical concept of linear logic where a resource is a one-time token.

An affine type relaxes the constraint to at most once: a value may be consumed or silently dropped, but not used twice. Rust's ownership system is built on affine types: moving a value transfers ownership, and the original binding becomes invalid.

The primary motivation is resource safety. A file handle typed as linear or affine cannot be closed twice, cannot be forgotten open, and cannot be shared without explicit transfer. The compiler enforces correct resource lifecycle without runtime bookkeeping.

Related to this is the concept of uniqueness types, Clean language, and borrowing, which temporarily grants read-only access without transferring ownership.

PHP has no linear or affine types. Values are reference-counted and can be freely copied, aliased, or ignored. Resource handles (file handles, database connections) can be opened, re-used, or left unclosed without any static-analysis enforcement. The closest approximations are:

+ Destructor-based cleanup, ``__destruct``, which runs when the last reference is dropped, but does not prevent double-use.
+ Value objects that track consumed state with a boolean flag at runtime.
+ Static analysis rules that heuristically warn about unclosed resources.

`Documentation <https://en.wikipedia.org/wiki/Substructural_type_system>`__

See also `Substructural type system on Wikipedia <https://en.wikipedia.org/wiki/Substructural_type_system>`_ and `Rust ownership model <https://doc.rust-lang.org/book/ch04-01-what-is-ownership.html>`_.

Related : :ref:`Type System <type-system>`, :ref:`resource <resource>`, :ref:`Resource Leak <resource-leak>`, :ref:`References <reference>`, :ref:`Garbage Collection <garbage-collection>`, :ref:`Destructor <destructor>`, :ref:`Immutable <immutable>`
