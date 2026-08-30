---
type: "unsupported"
title: "Currying"
description: "Currying is the transformation of a function that takes multiple arguments into a sequence of functions that each take a single argument."
resource: "https://en.wikipedia.org/wiki/Currying"
tags: ["unsupported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Currying

Currying is the transformation of a function that takes multiple arguments into a sequence of functions that each take a single argument. The name comes from mathematician Haskell Curry.

In a language with native currying, calling a multi-argument function with fewer arguments than it expects does not produce an error: it returns a new function that expects the remaining arguments. This allows building specialised functions from general ones with no extra syntax.

Native currying is available in Haskell, F#, ``OCaml``, and ``Erlang``, where all functions are curried by default. Scala and Kotlin support it explicitly.

PHP does not support currying natively. It can be approximated by returning closures manually, but there is no syntactic or runtime support.

Because building a curried function usually starts from partial application, the two are sometimes referred to jointly as partial application currying.

```php
<?php

    // Manual simulation of currying with closures
    $add = fn($x) => fn($y) => $x + $y;

    $add5 = $add(5);
    echo $add5(3); // 8

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Currying](https://en.wikipedia.org/wiki/Currying)

## See Also
- [Currying in Haskell](https://wiki.haskell.org/Currying)
- [Currying in F#](https://learn.microsoft.com/en-us/dotnet/fsharp/introduction-to-functional-programming/first-class-functions)

## Related
- [Partial Function](/features/partial-function.md)
- [Partial Application](/features/partial-application.md)
- [Anonymous Function](/features/anonymous-function.md)
- [Arrow Functions](/features/arrow-function.md)
- [Functional Programming](/features/functional-programming.md)
- [Closure](/features/closure.md)

