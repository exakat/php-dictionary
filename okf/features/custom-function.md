---
type: "concept"
title: "Custom Function"
description: "A custom function, or user-defined function, is a function declared by the developer, as opposed to a native PHP function provided by the engine or an extension."
resource: "https://www.php.net/manual/en/functions.user-defined.php"
tags: ["function", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Custom Function

A custom function, or user-defined function, is a function declared by the developer, as opposed to a native PHP function provided by the engine or an extension. Custom functions encapsulate reusable logic under a named callable.

Functions are declared with the ``function`` keyword and may be defined in any scope. Unlike many languages, PHP functions are global by default once declared: a function defined inside a conditional block or another function is still globally accessible after that point is reached at runtime.

Custom functions can be:

+ Regular functions: ``function myFunction() {}``
+ Closures: ``$fn = function() {}``
+ Arrow functions: ``$fn = fn() => expression``
+ Static methods: functions bound to a class

PHP also supports first-class callables, since PHP 8.1, and can call custom functions by name stored in a variable, as a dynamic calls.

```php
<?php

    // Regular custom function
    function clamp(int $value, int $min, int $max): int {
        return max($min, min($max, $value));
    }
    
    echo clamp(150, 0, 100); // 100
    
    // Anonymous function stored in a variable
    $double = function(int $n): int {
        return $n * 2;
    };
    
    echo $double(5); // 10
    
    // Arrow function
    $triple = fn(int $n): int => $n * 3;
    echo $triple(5); // 15
    
    // First-class callable syntax (PHP 8.1)
    $fn = clamp(...);
    echo $fn(42, 0, 50); // 42

?>
```

## Documentation
- [https://www.php.net/manual/en/functions.user-defined.php](https://www.php.net/manual/en/functions.user-defined.php)

## See Also
- [PHP: Function Arguments](https://www.php.net/manual/en/functions.arguments.php)
- [PHP: Returning Values](https://www.php.net/manual/en/functions.returning-values.php)

## Related
- [Functions](/features/function.md)
- [Anonymous Function](/features/anonymous-function.md)
- [Arrow Functions](/features/arrow-function.md)
- [First Class Callable](/features/first-class-callable.md)
- [Closure](/features/closure.md)
- [PHP Native Function](/features/php-function.md)

