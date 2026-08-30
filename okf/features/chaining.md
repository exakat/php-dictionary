---
type: "disambiguation"
title: "Chaining"
description: "The word ``chaining`` appears in several distinct PHP concepts: + Chaining assignation: assigning the same value to several variables in a single expression, using successive ``=`` operators, e.g."
tags: ["disambiguation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Chaining

The word ``chaining`` appears in several distinct PHP concepts:

+ Chaining assignation: assigning the same value to several variables in a single expression, using successive ``=`` operators, e.g. ``$a = $b = $c = 0;``. Evaluated right to left. Magic methods are not triggered
+ Method chaining: calling methods successively on the return value of the previous call, e.g. ``$object->m1()->m2()->m3()``. The result of each method call is used to call the next one
+ Fluent interface: an object-oriented API design pattern that relies extensively on method chaining to create readable, expressive code. Not related to the ``interface`` keyword
+ Chaining exceptions: re-throwing a caught exception wrapped inside a new exception, preserving the original error context via ``Exception::getPrevious()``
+ Chaining new without parentheses: since PHP 8.4, calling a method, accessing a property, or invoking ``__invoke()`` directly on a ``new`` expression without wrapping it in parentheses, e.g. ``new X()->foo()``.

## See Also
- [Method Chaining](https://en.wikipedia.org/wiki/Method_chaining)
- [Exception Chaining](https://en.wikipedia.org/wiki/Exception_chaining)
- [Fluent Interface](https://en.wikipedia.org/wiki/Fluent_interface)

## Related
- [Chaining Assignation](/features/chaining-assignation.md)
- [Fluent Interface](/features/fluent-interface.md)
- [Chaining Exceptions](/features/exception-chain.md)
- [Chaining New Without Parenthesis](/features/chaining-new-without-parenthesis.md)
- [Methodcall](/features/methodcall.md)
- [Expressive Interface](/features/expressive-interface.md)

