---
type: "concept"
title: "Result Type"
description: "A result type is a built-in sum type, such as Rust's ``Result<T, E>`` or Swift's ``Result<Success, Failure>``, that represents either a successful outcome carrying a value, or a failure carrying an error."
resource: "https://en.wikipedia.org/wiki/Result_type"
tags: ["concept", "type", "not-supported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Result Type

A result type is a built-in sum type, such as Rust's ``Result<T, E>`` or Swift's ``Result<Success, Failure>``, that represents either a successful outcome carrying a value, or a failure carrying an error. It is returned by ordinary functions instead of being thrown, so error handling becomes part of the type signature: the compiler forces the caller to check which case occurred before using the value, typically through pattern matching.

Result types turn recoverable errors into regular data, and are usually reserved for expected failure modes, such as a parse error or a missing file, while unrecoverable conditions still use panics or exceptions.

PHP has no native result type. Recoverable failure is normally reported by throwing an exception, which unwinds the stack and must be caught with ``try``/``catch``, or by returning a sentinel such as ``false`` or ``null``, which the caller can silently ignore. A result type can be approximated in userland with a class holding either a value or an error, combined with ``match`` or ``instanceof`` checks, but the engine does not enforce that the caller handles both cases.

```php
<?php

    // Approximation, not a native construct.
    abstract class Result {}
    final class Ok extends Result {
        public function __construct(public readonly mixed $value) {}
    }
    final class Err extends Result {
        public function __construct(public readonly string $error) {}
    }
    
    function divide(int $a, int $b): Result {
        if ($b === 0) {
            return new Err('division by zero');
        }
        return new Ok($a / $b);
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Result_type](https://en.wikipedia.org/wiki/Result_type)

## See Also
- [Error Handling Approaches: Exceptions or Result Types?](https://dev.to/merbayerp/error-handling-approaches-exceptions-or-result-types-47bm)
- [Error Handling - The Rust Programming Language](https://doc.rust-lang.org/book/ch09-00-error-handling.html)

## Related
- [Exception](/features/exception.md)
- [Union Type](/features/union-type.md)
- [Sum Type](/features/sum-type.md)
- [Algebraic Data Type](/features/algebraic-data-type.md)
- [Enumeration (enum)](/features/enum.md)
- [Pattern Matching](/features/pattern-matching.md)
- [Railroad Programming](/features/railroad-programming.md)

