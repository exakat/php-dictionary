---
type: "concept"
title: "Effect System"
description: "An effect system is a type-system extension that tracks, in a function's signature, which side effects it may perform: input/output, mutable state, exceptions, non-determinism, and so on."
resource: "https://en.wikipedia.org/wiki/Effect_system"
tags: ["concept", "type", "not-supported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Effect System

An effect system is a type-system extension that tracks, in a function's signature, which side effects it may perform: input/output, mutable state, exceptions, non-determinism, and so on. A function's type then describes not only its inputs and outputs, but also what it is allowed to do while computing them.

Effect systems let a compiler enforce effect discipline: a function declared as pure cannot secretly perform I/O, and a caller can see, from the signature alone, that a function might throw, block, or write to a file. Effect handlers, found in languages such as ``Koka``, Unison, and ``OCaml`` 5, let calling code intercept and reinterpret an effect, similarly to how exception handlers intercept exceptions, but generalized to any tracked effect.

PHP has no effect system. There is no way to declare, in a function's signature, that it performs no I/O or is otherwise pure; a ``@throws`` docblock tag is documentation only, not enforced by the engine. Any function can perform any side effect at any time, and nothing in the type system tracks or restricts it.

## Documentation
- [https://en.wikipedia.org/wiki/Effect_system](https://en.wikipedia.org/wiki/Effect_system)

## See Also
- [PHP type declarations](https://www.php.net/manual/en/language.types.declarations.php)
- [Koka language documentation](https://koka-lang.github.io/koka/doc/index.html)
- [Unison language](https://www.unison-lang.org/)

## Related
- [Type System](/features/type-system.md)
- [Pure Function](/features/pure-function.md)
- [Side Effect](/features/side-effect.md)
- [Monad](/features/monad.md)
- [Exception](/features/exception.md)
- [Docblock](/features/docblock.md)

