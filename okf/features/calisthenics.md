---
type: "concept"
title: "Object Calisthenics"
description: "Object Calisthenics is a set of nine coding constraints, introduced by ``Jeff Bay``, meant to be practiced as an exercise to force better object-oriented design habits, rather than followed strictly in production code at all times."
resource: "https://williamdurand.fr/2013/06/03/object-calisthenics/"
tags: ["concept", "best practice"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Object Calisthenics

Object Calisthenics is a set of nine coding constraints, introduced by ``Jeff Bay``, meant to be practiced as an exercise to force better object-oriented design habits, rather than followed strictly in production code at all times.

The nine rules are:

+ Only one level of indentation per method.
+ Don't use the ``else`` keyword.
+ Wrap primitive types and strings in dedicated classes.
+ Use only one dot per line, limiting method chaining.
+ Don't abbreviate names.
+ Keep entities, classes and packages, small.
+ Limit instance variables to two per class.
+ Use first-class collections, wrapping any collection in a dedicated class.
+ Don't use getters and setters.

Applying every rule everywhere, all the time, tends to produce over-engineered code; the value is in practicing them deliberately to notice where a design leans on primitives, deep nesting, or exposed state more than it should.

## Documentation
- [https://williamdurand.fr/2013/06/03/object-calisthenics/](https://williamdurand.fr/2013/06/03/object-calisthenics/)

## See Also
- [Object calisthenics (in PHP)](https://rubenrubiob.substack.com/p/object-calisthenics-in-php)

## Related
- [Clean Code](/features/clean-code.md)
- [SOLID](/features/solid.md)
- [Primitive Obsession](/features/primitive-obsession.md)
- [Class Getter Method](/features/getter.md)
- [Class Setter Method](/features/setter.md)
- [Value Object](/features/value-object.md)
- [Cognitive Complexity](/features/cognitive-complexity.md)
- [Cyclomatic Complexity](/features/cyclomatic-complexity.md)

