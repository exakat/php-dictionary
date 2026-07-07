.. _gadt:
.. _Generalized Algebraic Data Type:
.. meta::
	:description:
		Generalized Algebraic Data Type (GADT): A Generalized Algebraic Data Type, GADT, is an extension of algebraic data types in which each constructor of the type can return a different, more specific instantiation of the type.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Generalized Algebraic Data Type (GADT)
	:twitter:description: Generalized Algebraic Data Type (GADT): A Generalized Algebraic Data Type, GADT, is an extension of algebraic data types in which each constructor of the type can return a different, more specific instantiation of the type
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Generalized Algebraic Data Type (GADT)
	:og:type: article
	:og:description: A Generalized Algebraic Data Type, GADT, is an extension of algebraic data types in which each constructor of the type can return a different, more specific instantiation of the type
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/gadt.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Generalized Algebraic Data Type (GADT)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 07:37:26 +0000","dateModified":"Tue, 07 Jul 2026 07:37:26 +0000","description":"A Generalized Algebraic Data Type, GADT, is an extension of algebraic data types in which each constructor of the type can return a different, more specific instantiation of the type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Generalized Algebraic Data Type (GADT).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Generalized Algebraic Data Type (GADT)
--------------------------------------

A Generalized Algebraic Data Type, GADT, is an extension of algebraic data types in which each constructor of the type can return a different, more specific instantiation of the type. This allows the type system to track which constructor was used and to refine the available operations accordingly.

The canonical example is a typed expression tree:

``data Expr a where``
``  Lit    :: Int  -> Expr Int``
``  IsZero :: Expr Int  -> Expr Bool``
``  If     :: Expr Bool -> Expr a -> Expr a -> Expr a``

A ``Lit`` produces an ``Expr Int``, while ``IsZero`` produces an ``Expr Bool``. An ``eval`` function typed ``eval :: Expr a -> a`` can then return an ``Int`` for ``Lit`` nodes and a ``Bool`` for ``IsZero`` nodes, with the type system proving that no ill-typed expression tree can be constructed.

GADTs effectively let data constructors act as proofs. They are natively supported in Haskell, OCaml, and Scala (via type refinement in pattern matches).

PHP supports none of the prerequisites for GADTs: it has no algebraic data types, no generics, and no exhaustive pattern matching. Class hierarchies with ``instanceof`` dispatch approximate the structural separation of cases, but without the type refinement that makes GADTs powerful. The return type of a method cannot vary based on which subclass was constructed.

`Documentation <https://en.wikipedia.org/wiki/Generalized_algebraic_data_type>`__

See also `Generalized algebraic data type on Wikipedia <https://en.wikipedia.org/wiki/Generalized_algebraic_data_type>`_.

Related : :ref:`Algebraic Data Type <algebraic-data-type>`, :ref:`Sum Type <sum-type>`, :ref:`Generics <generics>`, :ref:`Type System <type-system>`, :ref:`Type Inference <type-inference>`, :ref:`Pattern Matching <pattern-matching>`, :ref:`Dependent Type <dependent-type>`
