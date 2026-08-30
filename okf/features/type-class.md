---
type: "concept"
title: "Type Class"
description: "A type class, as found in Haskell and similar languages, is a named set of functions that a type must implement in order to belong to that class."
resource: "https://en.wikipedia.org/wiki/Type_class"
tags: ["concept", "type", "not-supported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Type Class

A type class, as found in Haskell and similar languages, is a named set of functions that a type must implement in order to belong to that class. Unlike an object-oriented interface, a type class is not implemented by the type itself: instances are declared separately, so a type class can be attached to a type after the fact, including to types the author does not own, such as built-in numbers or third-party types.

Type classes provide ad-hoc polymorphism: the same function name, such as ``==`` or ``show``, resolves to a different implementation depending on the type of its argument, chosen by the compiler at compile time rather than looked up in a table at runtime.

PHP has no type class mechanism. Ad-hoc polymorphism over an existing type can only be approximated with interfaces implemented by the type's own class, free functions with manual type checks, or match expressions branching on ``gettype()``. There is no way to retroactively attach a shared contract to a type PHP's engine already knows about, such as ``int`` or a class from a third-party library, without wrapping it.

## Documentation
- [https://en.wikipedia.org/wiki/Type_class](https://en.wikipedia.org/wiki/Type_class)

## See Also
- [Learn You a Haskell: Types and Typeclasses](https://learnyouahaskell.com/types-and-typeclasses)
- [Real World Haskell: Using Typeclasses](https://book.realworldhaskell.org/read/using-typeclasses.html)

## Related
- [Interface](/features/interface.md)
- [Polymorphism](/features/polymorphism.md)
- [Generics](/features/generics.md)
- [Overloading](/features/overloading.md)
- [Type System](/features/type-system.md)

