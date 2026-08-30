---
type: "PHP Feature"
title: "Generics"
description: "Generics are a style of types, where the type of a property, parameter or return is specified at the declaration level."
resource: "https://stitcher.io/blog/generics-in-php-1"
tags: ["feature", "future", "rfc", "not-supported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Generics

Generics are a style of types, where the type of a property, parameter or return is specified at the declaration level. 

The generics syntax looks like: ``$users = new List<User>();`` where ``List`` is a class that holds a list of items, and those items are of the type between brackets. Here, it is ``User``.

Generics allows the creation of general classes, that can process several types of data. The actual application's type is declared in the type itself. This is similar to configure an array to only handle one type of elements.

Generics have been submitted as RFC since 2016, and are currently not implemented, in the foreseeable future. 

One implementation of generics is available, with transpiling: see ``mrsuh/php-generics``.

Generics are generally considered to be not supported, although external tools provide this feature, such as static analysis. Generics are not supported at the engine level.

## Documentation
- [https://stitcher.io/blog/generics-in-php-1](https://stitcher.io/blog/generics-in-php-1)

## See Also
- [Why we can't have generics in PHP](https://stitcher.io/blog/generics-in-php-3)
- [PHP RFC: Generic Types and Functions](https://wiki.php.net/rfc/generics)
- [mrsuh/php-generics](https://github.com/mrsuh/php-generics)
- [How To Start Using Generic Types In PHP](https://dev.to/jszutkowski/how-to-start-using-generic-types-in-php-2f1k)

## Related
- [Type Checking](/features/type-checking.md)
- [Polymorphism](/features/polymorphism.md)
- [Collection](/features/collection.md)
- [Monomorphization](/features/monomorphization.md)
- [Types Erasure](/features/type-erasure.md)
- [Algebraic Data Type](/features/algebraic-data-type.md)
- [Existential Type](/features/existential-type.md)
- [Generalized Algebraic Data Type (GADT)](/features/gadt.md)
- [Higher-Kinded Type](/features/higher-kinded-type.md)
- [Phantom Type](/features/phantom-type.md)
- [Row Polymorphism](/features/row-polymorphism.md)
- [Template Metaprogramming (TMP)](/features/template-metaprogramming.md)
- [Type System](/features/type-system.md)

