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

Related : [Exception](Exception), [Union Type](Union Type), [Sum Type](Sum Type), [Algebraic Data Type](Algebraic Data Type), [Enumeration (enum)](Enumeration (enum)), [Pattern Matching](Pattern Matching), [Railroad Programming](Railroad Programming)
