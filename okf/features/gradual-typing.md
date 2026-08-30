---
type: "type"
title: "Gradual Typing"
description: "Gradual typing is a type system that lets typed and untyped, or loosely typed, code coexist and interoperate, with the amount of checking growing incrementally rather than being all-or-nothing."
resource: "https://en.wikipedia.org/wiki/Gradual_typing"
tags: ["type", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Gradual Typing

Gradual typing is a type system that lets typed and untyped, or loosely typed, code coexist and interoperate, with the amount of checking growing incrementally rather than being all-or-nothing. A value can flow between a strictly typed region and a dynamically typed one, with the boundary checked at the point where the two meet.

PHP's type system has grown this way release by release rather than arriving as a single design: class types in version 5.0, scalar types in version 7.0, union types, nullsafe operators, and DNF types since. Each addition is checked at runtime, so the language never had to make a single, all-at-once jump to a fully static system, and existing code keeps working as new, more precise, typed constructs become available around it. ``mixed``, and the absence of a declared type, are what let a codebase stay only partially typed at any point along that path.

Proposals to add generics follow the same philosophy: rather than erased, compile-time-only type parameters, the direction under discussion starts with invariant type parameters that are actually checked at runtime on a narrow surface, such as interfaces, and can grow from there, keeping every new construct held to the same rule the rest of the type system already follows.

```php
<?php

    function total(array $orders): mixed // mixed marks the boundary: untyped by choice
    {
        // ...
    }

    function totalTyped(array $orders): Money // strictly typed, checked at runtime
    {
        // ...
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Gradual_typing](https://en.wikipedia.org/wiki/Gradual_typing)

## See Also
- [PHP’s Gradual Typing Journey: From Wild West to Almost Respectable](https://www.javacodegeeks.com/2026/01/phps-gradual-typing-journey-from-wild-west-to-almost-respectable.html)

## Related
- [Type System](/features/type-system.md)
- [Type Checking](/features/type-checking.md)
- [Type Inference](/features/type-inference.md)
- [Type Narrowing](/features/type-narrowing.md)
- [Type Widening](/features/type-widening.md)
- [Disjunctive Normal Form (DNF)](/features/dnf-type.md)
- [Mixed](/features/mixed.md)
- [Type Parametricity](/features/type-parametricity.md)

