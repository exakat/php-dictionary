---
type: "PHP Feature"
title: "First Class Callable"
description: "First Class Callable Syntax is a new feature that creates a closure directly from a function, by using the triple dot operator as an argument."
resource: "https://www.php.net/closure"
tags: ["feature", "syntax", "closure"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# First Class Callable

First Class Callable Syntax is a new feature that creates a closure directly from a function, by using the triple dot operator as an argument.

First class callable may be used on functions, closures, arrow functions and methods and static methods.

The number of arguments is not important: it is the same as the actual definition of the underlying method, and will be checked at call time only.

Such closure may be created using any kind of function, such as native PHP function, or library methods.

```php
<?php

    $a = foo(...);
    
    $function = strtolower(...);
    
    $closure = X::staticMethod(...);

?>
```

## Documentation
- [https://www.php.net/closure](https://www.php.net/closure)

## See Also
- [PHP's First-Class Callable Syntax](https://dev.to/damms005/phps-first-class-callable-syntax-1kjl)

## Related
- [Functions](/features/function.md)
- [Closure](/features/closure.md)
- [Anonymous Function](/features/anonymous-function.md)
- [Arrow Functions](/features/arrow-function.md)
- [Custom Function](/features/custom-function.md)
- [Three Dots](/features/three-dots.md)

## Details
- PHP since: 8.1

