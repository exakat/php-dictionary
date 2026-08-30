---
type: "type"
title: "Types Erasure"
description: "Type Erasure is the removal of type annotations from the source code when going to production."
resource: "https://en.wikipedia.org/wiki/Type_erasure"
tags: ["type", "rfc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Types Erasure

Type Erasure is the removal of type annotations from the source code when going to production. 

There may be several goals with this operation: 

+ Handle unsupported types, such as generics. They are supported by tooling, but not by the PHP engine, so after using them during the development phase, they are removed
+ Speed up production code by removing execution-time checks. This requires that types are safe and sound

Type erasure is a transformation tool, akin to transpiling, that converts the developed code into production code: it is run at the deployment stage.

One alternative to type erasure is monomorphization, where every needed type is created.

## Documentation
- [https://en.wikipedia.org/wiki/Type_erasure](https://en.wikipedia.org/wiki/Type_erasure)

## See Also
- [mrsuh/php-generics](https://github.com/mrsuh/php-generics)
- [Bound Erased Generic Types](https://wiki.php.net/rfc/bound_erased_generic_types)

## Related
- [Type System](/features/type.md)
- [Transpile](/features/transpile.md)
- [Monomorphization](/features/monomorphization.md)
- [Generics](/features/generics.md)
- [Performance](/features/performance.md)
- [Type Checking](/features/type-checking.md)

