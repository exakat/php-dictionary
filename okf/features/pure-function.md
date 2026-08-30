---
type: "PHP Feature"
title: "Pure Function"
description: "A pure function is a function with no side effects."
resource: "https://en.wikipedia.org/wiki/Pure_function"
tags: ["function", "functional programming"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Pure Function

A pure function is a function with no side effects. It adheres to two fundamental principles:

+ Determinism: for the same input, a pure function will always return the same output. There are no hidden dependencies or side effects that could change the result.
+ No side-effect: a pure function does not modify any external state or data. It does not change variables outside its scope, write to a database, modify a file, or perform any action that affects the world outside the function.

A function that is not pure is an impure function. 

This notion applies to functions, methods, native and custom functions, closures and arrow functions.

```php
<?php

    function add(int $a, int $b): int {
        return $a + $b;
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Pure_function](https://en.wikipedia.org/wiki/Pure_function)

## See Also
- [Pure Functions](https://leanpub.com/read/thinking-functionally-in-php/leanpub-auto-pure-functions)
- [Functional Programming in PHP: Part 2](https://agiroloki.medium.com/functional-programming-in-php-part-2-9db0f5443cdf)

## Related
- [Functions](/features/function.md)
- [Method](/features/method.md)
- [Return](/features/return.md)
- [Side Effect](/features/side-effect.md)
- [Impure Function](/features/impure-function.md)
- [Determinism](/features/determinism.md)
- [Memoization](/features/memoization.md)
- [Testable](/features/testable.md)

