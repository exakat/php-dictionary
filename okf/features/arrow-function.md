---
type: "keyword"
title: "Arrow Functions"
description: "Arrow functions, introduced with the ``fn`` keyword, are a type of closure with a specific syntax."
resource: "https://www.php.net/manual/en/functions.arrow.php"
tags: ["keyword", "function", "feature", "closure"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Arrow Functions

Arrow functions, introduced with the ``fn`` keyword, are a type of closure with a specific syntax. They only accept one expression, and automatically import all the variables from the local context of definition.

Arrow functions may also be marked as ``static``, to prevent this import.

```php
<?php

    class X {
        private int $p = 2;
        
        function foo() {
           $b = 10;
           $fn = fn($a) => $a + $b + 2;
           
           $fn = static fn($a) => $a + $b + $this->p;

           // $this is not allowed in static arrow function
           $fn = static fn($a) => $a + $b + $this->p;
        }
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/functions.arrow.php](https://www.php.net/manual/en/functions.arrow.php)

## See Also
- [Arrow functions in PHP](https://drops-of-php.hi-folks.dev/functions/arrow/#_top)
- [PHP Arrow Functions – Simple, Short, and Effective](https://dev.to/eddiegoldman/php-arrow-functions-simple-short-and-effective-3lb5)
- [Variable Scope in PHP: Global, Static, and Closures](https://oatllo.com/course/php/function/php-variable-scope-guide)

## Related
- [static](/features/static.md)
- [$this](/features/$this.md)
- [Functions](/features/function.md)
- [Closure](/features/closure.md)
- [Anonymous Function](/features/anonymous-function.md)
- [First Class Callable](/features/first-class-callable.md)
- [Callables](/features/callable.md)
- [Callbacks](/features/callback.md)
- [Callable Arrays](/features/array-callable.md)
- [Custom Function](/features/custom-function.md)
- [Double Arrow](/features/double-arrow.md)
- [Streamlining](/features/streamlining.md)
- [Currying](/features/currying.md)
- [Idiomatic](/features/idiomatic.md)
- [Partial Application](/features/partial-application.md)
- [Recursion](/features/recursion.md)

## Details
- PHP since: 7.4

