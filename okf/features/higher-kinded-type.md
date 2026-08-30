---
type: "concept"
title: "Higher-Kinded Type"
description: "A higher-kinded type is a type that abstracts over type constructors rather than over concrete types."
resource: "https://en.wikipedia.org/wiki/Kind_(type_theory)"
tags: ["concept", "type", "not-supported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Higher-Kinded Type

A higher-kinded type is a type that abstracts over type constructors rather than over concrete types. Where a generic type parameter ``T`` ranges over types like ``int`` or ``string``, a higher-kinded parameter ``F`` ranges over types that themselves take a type argument, such as ``List``, ``Maybe``, or ``Promise``.

The canonical example is the ``Functor`` typeclass in Haskell: ``fmap :: (a -> b) -> f a -> f b``. Here ``f`` is a higher-kinded variable: it stands for any one-argument type constructor. This allows writing a single abstraction that works uniformly over ``List a``, ``Maybe a``, ``IO a``, and any other functor, without knowing the concrete constructor in advance.

Higher-kinded types are what make purely functional abstractions like Functor, Monad, Applicative, and Foldable expressible without code duplication. Languages that support them natively include Haskell, Scala, PureScript, and Rust, partially through associated types.

PHP does not support higher-kinded types. PHP lacks native generics entirely, which is a prerequisite. Even PHPStan and Psalm ``@template`` annotations cover first-order generics only; they cannot abstract over parameterized type constructors. Functional PHP libraries such as ``marcosh/lamphpda`` approximate monadic abstractions at runtime using conventions, but without static type-level verification.

## Documentation
- [https://en.wikipedia.org/wiki/Kind_(type_theory)](https://en.wikipedia.org/wiki/Kind_(type_theory))

## See Also
- [Higher-Kinded Types in Depth](https://www.numberanalytics.com/blog/higher-kinded-types-in-depth)

## Related
- [Generics](/features/generics.md)
- [Type System](/features/type-system.md)
- [Polymorphism](/features/polymorphism.md)
- [Functional Programming](/features/functional-programming.md)
- [Types Erasure](/features/type-erasure.md)
- [Monomorphization](/features/monomorphization.md)
- [Algebraic Data Type](/features/algebraic-data-type.md)

## Details
- Packagist: [marcosh/lamphpda](https://packagist.org/packages/marcosh/lamphpda)

