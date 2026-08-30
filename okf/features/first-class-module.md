---
type: "concept"
title: "First-Class Module"
description: "In ``OCaml`` and a few other ML-family languages, a module can itself be treated as an ordinary value: passed as a function argument, returned from a function, stored in a data structure, or chosen at runtime among several implementations of the same module signature, using a construct such as ``(module M : SIG)``."
resource: "https://v2.ocaml.org/manual/firstclassmodules.html"
tags: ["concept", "not-supported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# First-Class Module

In ``OCaml`` and a few other ML-family languages, a module can itself be treated as an ordinary value: passed as a function argument, returned from a function, stored in a data structure, or chosen at runtime among several implementations of the same module signature, using a construct such as ``(module M : SIG)``. This lets an entire package of types and functions be selected or swapped dynamically, the way an object implementing an interface would be in an object-oriented language, but at the granularity of a whole module rather than a single instance.

This differs from ordinary module systems, where a module is only a static, compile-time unit of organization: something that ``import`` by name, but never hold, pass around, or compute with as a value.

PHP has no module construct at all, first-class or otherwise; a namespace is a compile-time naming device with no runtime representation and cannot be assigned to a variable, passed as an argument, or chosen dynamically. The closest PHP comes to swapping an entire package of related functionality at runtime is choosing between classes, typically through dependency injection or a factory that returns different objects implementing the same interface.

## Documentation
- [https://v2.ocaml.org/manual/firstclassmodules.html](https://v2.ocaml.org/manual/firstclassmodules.html)

## See Also
- [Namespaces](https://www.php.net/manual/en/language.namespaces.php)
- [Object Interfaces](https://www.php.net/manual/en/language.oop5.interfaces.php)

## Related
- [Module System with Explicit Exports](/features/module-system.md)
- [Namespaces](/features/namespace.md)
- [Interface](/features/interface.md)
- [Dependency Injection](/features/dependency-injection.md)

