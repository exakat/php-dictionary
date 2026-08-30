---
type: "concept"
title: "Determinism"
description: "A deterministic function or algorithm always produces the same output for the same input, regardless of when or how many times it is called."
resource: "https://en.wikipedia.org/wiki/Deterministic_algorithm"
tags: ["concept", "functional"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://en.wikipedia.org/wiki/Deterministic_algorithm](https://en.wikipedia.org/wiki/Deterministic_algorithm)

## See Also
- [Pure and Deterministic Functions](https://www.simplethread.com/pure-and-deterministic-functions/)
- [Understanding Pure Functions: A Core Concept in Functional Programming](https://medium.com/@linz07m/understanding-pure-functions-a-core-concept-in-functional-programming-d2189b688e00)

## Related
- [Pure Function](/features/pure-function.md)
- [Side Effect](/features/side-effect.md)
- [Idempotent](/features/idempotent.md)
- [Functional Programming](/features/functional-programming.md)
- [Immutable](/features/immutable.md)
- [Cache](/features/cache.md)
- [Memoization](/features/memoization.md)
- [Random](/features/random.md)
- [Deterministic](/features/deterministic.md)
- [Impure Function](/features/impure-function.md)

