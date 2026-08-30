---
type: "concept"
title: "Arity"
description: "Arity is the number of arguments, or operands, that a function, method, or operator accepts: a unary operator such as ``!`` has arity 1, a binary operator such as ``+`` has arity 2, and a function's arity is the count of its declared parameters."
resource: "https://en.wikipedia.org/wiki/Arity"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Arity

Arity is the number of arguments, or operands, that a function, method, or operator accepts: a unary operator such as ``!`` has arity 1, a binary operator such as ``+`` has arity 2, and a function's arity is the count of its declared parameters. A function whose arity is fixed always expects exactly that many arguments; a function of variable arity, called variadic, accepts any number of arguments from a given point onward.

Arity matters for overload resolution in languages that dispatch on parameter count, for currying, where a function is considered fully applied only once it has received as many arguments as its arity, and for reflection, where a caller may need to discover how many arguments a callable expects before invoking it dynamically.

PHP supports both fixed and variable arity directly. A function's fixed arity is simply its parameter list; variable arity is declared with the ``...`` splat operator on the last parameter, and the actual number of arguments received by any call, fixed or variadic, can be inspected at runtime with ``func_num_args()``, or discovered ahead of a call through ``ReflectionFunction::getNumberOfParameters()``.

```php
<?php

    function sum(int ...$numbers): int {
        return array_sum($numbers);
    }
    
    sum(1, 2, 3); // called with arity 3, though sum() itself is variadic
    
    function greet(string $name) {
        echo func_num_args(); // 1: this call's actual arity
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Arity](https://en.wikipedia.org/wiki/Arity)

## See Also
- [4.6 - Arity, partial application and currying](https://learn-functional-programming.com/chapters/4.6-partial-application-and-currying/)

## Related
- [Variadic](/features/variadic.md)
- [func_get_args()](/features/func_get_args.md)
- [Functions](/features/function.md)
- [Currying](/features/currying.md)
- [Overloading](/features/overloading.md)

