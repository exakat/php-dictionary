.. _option-type:
.. _maybe-type:
.. meta::
	:description:
		Option Type: An option type, called ``Option`` in Rust and OCaml or ``Maybe`` in Haskell, is a native sum type with exactly two cases: a value is present, wrapped as ``Some(x)`` or ``Just x``, or it is absent, represented as ``None`` or ``Nothing``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Option Type
	:twitter:description: Option Type: An option type, called ``Option`` in Rust and OCaml or ``Maybe`` in Haskell, is a native sum type with exactly two cases: a value is present, wrapped as ``Some(x)`` or ``Just x``, or it is absent, represented as ``None`` or ``Nothing``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Option Type
	:og:type: article
	:og:description: An option type, called ``Option`` in Rust and OCaml or ``Maybe`` in Haskell, is a native sum type with exactly two cases: a value is present, wrapped as ``Some(x)`` or ``Just x``, or it is absent, represented as ``None`` or ``Nothing``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/option-type.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Option Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 15:30:46 +0000","dateModified":"Wed, 08 Jul 2026 15:30:46 +0000","description":"An option type, called ``Option`` in Rust and OCaml or ``Maybe`` in Haskell, is a native sum type with exactly two cases: a value is present, wrapped as ``Some(x)`` or ``Just x``, or it is absent, represented as ``None`` or ``Nothing``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Option Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Option Type
-----------

An option type, called ``Option`` in Rust and OCaml or ``Maybe`` in Haskell, is a native sum type with exactly two cases: a value is present, wrapped as ``Some(x)`` or ``Just x``, or it is absent, represented as ``None`` or ``Nothing``. It is used instead of a nullable type to represent the possible absence of a value.

The key difference with a plain nullable type is enforcement: the wrapped value cannot be used directly. It must first be unwrapped through pattern matching or a combinator such as ``map``/``and_then``, so the compiler guarantees that the ``None``/``Nothing`` case is always considered before the contained value is accessed.

PHP has no option type. Absence of a value is represented with ``null``, combined with a nullable type declaration such as ``?string``. The nullsafe operator ``?->`` and null coalescing operator ``??`` make chaining safer, but nothing prevents dereferencing a possibly-null value directly and triggering a runtime error; the language does not force the check the way an option type does.

.. code-block:: php
   
   <?php
   
       function findUser(int $id): ?User {
           return $id === 1 ? new User('Ada') : null;
       }
       
       // Nothing forces this check: omitting it just yields a runtime error.
       $user = findUser(2);
       echo $user?->name ?? 'not found';
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Option_type>`__

Related : :ref:`Nullsafe <nullsafe>`, :ref:`Sum Type <sum-type>`, :ref:`Algebraic Data Type <algebraic-data-type>`, :ref:`Union Type <union-type>`, :ref:`Pattern Matching <pattern-matching>`
