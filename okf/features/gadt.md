---
type: "concept"
title: "Generalized Algebraic Data Type (GADT)"
description: "A Generalized Algebraic Data Type, ``GADT``, is an extension of algebraic data types in which each constructor of the type can return a different, more specific instantiation of the type."
resource: "https://en.wikipedia.org/wiki/Generalized_algebraic_data_type"
tags: ["concept", "type", "acronym", "not-supported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Generalized Algebraic Data Type (GADT)

A Generalized Algebraic Data Type, ``GADT``, is an extension of algebraic data types in which each constructor of the type can return a different, more specific instantiation of the type. This allows the type system to track which constructor was used and to refine the available operations accordingly.

The canonical example is a typed expression tree:

``data Expr a where``
``  Lit    :: Int  -> Expr Int``
``  IsZero :: Expr Int  -> Expr Bool``
``  If     :: Expr Bool -> Expr a -> Expr a -> Expr a``

A ``Lit`` produces an ``Expr Int``, while ``IsZero`` produces an ``Expr Bool``. An ``eval`` function typed ``eval :: Expr a -> a`` can then return an ``Int`` for ``Lit`` nodes and a ``Bool`` for ``IsZero`` nodes, with the type system proving that no ill-typed expression tree can be constructed.

``GADT`` effectively let data constructors act as proofs. They are natively supported in ``Haskell``, ``OCaml``, and Scala via type refinement in pattern matches.

PHP supports none of the prerequisites for ``GADT``: it has no algebraic data types, no generics, and no exhaustive pattern matching. Class hierarchies with ``instanceof`` dispatch approximate the structural separation of cases, but without the type refinement that makes ``GADT`` powerful. The return type of a method cannot vary based on which subclass was constructed.

## Documentation
- [https://en.wikipedia.org/wiki/Generalized_algebraic_data_type](https://en.wikipedia.org/wiki/Generalized_algebraic_data_type)

## See Also
- [Generalized Algebraic Data Types and Object-Oriented Programming](https://www.microsoft.com/en-us/research/wp-content/uploads/2016/02/gadtoop.pdf)
- [6.4.9. Generalised Algebraic Data Types (GADTs) — GHC User's Guide](https://ghc.gitlab.haskell.org/ghc/doc/users_guide/exts/gadt.html)

## Related
- [Algebraic Data Type](/features/algebraic-data-type.md)
- [Sum Type](/features/sum-type.md)
- [Generics](/features/generics.md)
- [Type System](/features/type-system.md)
- [Type Inference](/features/type-inference.md)
- [Pattern Matching](/features/pattern-matching.md)
- [Dependent Type](/features/dependent-type.md)

