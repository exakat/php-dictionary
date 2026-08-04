# Determinism
A deterministic function or algorithm always produces the same output for the same input, regardless of when or how many times it is called. It has no side effects and does not rely on external or mutable state.

Determinism is relevant to caching strategies, testing, and the correctness of pure functions. Non-deterministic sources such as ``rand()``, ``time()``, ``microtime()``, or global state break determinism and make functions harder to test and reason about.

Determinism is a core property of pure functions in functional programming and is closely related to idempotence.
```php
<?php

    // deterministic: same input always yields same output
    function add(int $a, int $b): int {
        return $a + $b;
    }
    
    // non-deterministic: depends on current time
    function currentHour(): int {
        return (int) date('H');
    }

?>
```

Related : [Pure Function](Pure Function), [Side Effect](Side Effect), [Idempotent](Idempotent), [Functional Programming](Functional Programming), [Immutable](Immutable), [Cache](Cache), [Memoization](Memoization), [Random](Random), [Deterministic](Deterministic), [Impure Function](Impure Function)
