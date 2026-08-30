---
type: "concept"
title: "Algebraic Data Type"
description: "An algebraic data type is a composite type built by combining simpler types through two fundamental operations: product and sum."
resource: "https://en.wikipedia.org/wiki/Algebraic_data_type"
tags: ["concept", "type", "not-supported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Algebraic Data Type

An algebraic data type is a composite type built by combining simpler types through two fundamental operations: product and sum.

A product type holds values of several types simultaneously, connected by AND. Every field is always present. A ``struct``, record, or tuple is a product type: ``{ name: string, age: int }`` means a name AND an age, always both.

A sum type holds a value of exactly one of several alternatives, connected by OR. Only one case is active at a time, and each case may carry different data. ``Circle(Float) | Rectangle(Float, Float)`` means either a circle, with a radius, or a rectangle, with two sides, never both at once.

Full ``ADT`` systems pair sum types with exhaustive pattern matching: the compiler enforces that every case is handled, turning incomplete switches into compile-time errors.

PHP supports product types natively through classes and arrays. Sum types are approximated by union types ``int|string`` and by enums, but neither carries associated data per variant, and ``match`` does not perform exhaustive structural decomposition over union type values.

PHP does not support true ``ADT``.

## Documentation
- [https://en.wikipedia.org/wiki/Algebraic_data_type](https://en.wikipedia.org/wiki/Algebraic_data_type)

## See Also
- [ADTs in PHP: an approximation guide](https://stitcher.io/blog/php-enums)

## Related
- [Sum Type](/features/sum-type.md)
- [Generalized Algebraic Data Type (GADT)](/features/gadt.md)
- [Union Type](/features/union-type.md)
- [Enumeration (enum)](/features/enum.md)
- [Intersection Type](/features/intersection-type.md)
- [Pattern Matching](/features/pattern-matching.md)
- [Type System](/features/type-system.md)
- [Generics](/features/generics.md)
- [Existential Type](/features/existential-type.md)
- [Higher-Kinded Type](/features/higher-kinded-type.md)
- [Option Type](/features/option-type.md)
- [Result Type](/features/result-type.md)
- [Structural Pattern Matching](/features/structural-pattern-matching.md)

