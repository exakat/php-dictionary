.. _higher-kinded-type:
.. _HKT:
.. meta::
	:description:
		Higher-Kinded Type: A higher-kinded type is a type that abstracts over type constructors rather than over concrete types.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Higher-Kinded Type
	:twitter:description: Higher-Kinded Type: A higher-kinded type is a type that abstracts over type constructors rather than over concrete types
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Higher-Kinded Type
	:og:type: article
	:og:description: A higher-kinded type is a type that abstracts over type constructors rather than over concrete types
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/higher-kinded-type.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/higher-kinded-type.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/higher-kinded-type.ini.html","name":"Higher-Kinded Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 04:49:31 +0000","dateModified":"Thu, 16 Jul 2026 04:49:31 +0000","description":"A higher-kinded type is a type that abstracts over type constructors rather than over concrete types","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Higher-Kinded Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Higher-Kinded Type
------------------

A higher-kinded type is a type that abstracts over type constructors rather than over concrete types. Where a generic type parameter ``T`` ranges over types like ``int`` or ``string``, a higher-kinded parameter ``F`` ranges over types that themselves take a type argument, such as ``List``, ``Maybe``, or ``Promise``.

The canonical example is the ``Functor`` typeclass in Haskell: ``fmap :: (a -> b) -> f a -> f b``. Here ``f`` is a higher-kinded variable: it stands for any one-argument type constructor. This allows writing a single abstraction that works uniformly over ``List a``, ``Maybe a``, ``IO a``, and any other functor, without knowing the concrete constructor in advance.

Higher-kinded types are what make purely functional abstractions like Functor, Monad, Applicative, and Foldable expressible without code duplication. Languages that support them natively include Haskell, Scala, PureScript, and Rust, partially through associated types.

PHP does not support higher-kinded types. PHP lacks native generics entirely, which is a prerequisite. Even PHPStan and Psalm ``@template`` annotations cover first-order generics only; they cannot abstract over parameterized type constructors. Functional PHP libraries such as ``marcosh/lamphpda`` approximate monadic abstractions at runtime using conventions, but without static type-level verification.

`Documentation <https://en.wikipedia.org/wiki/Kind_(type_theory)>`__

See also `Higher-Kinded Types in Depth <https://www.numberanalytics.com/blog/higher-kinded-types-in-depth>`_.

Related : :ref:`Generics <generics>`, :ref:`Type System <type-system>`, :ref:`Polymorphism <polymorphism>`, :ref:`Functional Programming <functional-programming>`, :ref:`Types Erasure <type-erasure>`, :ref:`Monomorphization <monomorphization>`, :ref:`Algebraic Data Type <algebraic-data-type>`

Related packages : `marcosh/lamphpda <https://packagist.org/packages/marcosh/lamphpda>`_
