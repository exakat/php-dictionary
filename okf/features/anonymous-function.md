---
type: "concept"
title: "Anonymous Function"
description: "A function may be instantiated, without defining a function name."
resource: "https://www.php.net/manual/en/functions.anonymous.php"
tags: ["concept", "feature", "syntax", "closure"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Anonymous Function

A function may be instantiated, without defining a function name. Such functions are called anonymous. 

Anonymous functions are defined as closures or arrow functions. They may also be created based on existing methods and functions, with the ``...`` operator.

Even without names, they are usable like functions, or as callable.

Methods cannot be anonymous, but it is possible to call a method without mentioning its name by using the ``__invoke`` magic method.

```php
<?php

    $closure = function () {} ; 

    $arrowFunction = fn() => 1;
    
    $fcs = strlen(...);

?>
```

## Documentation
- [https://www.php.net/manual/en/functions.anonymous.php](https://www.php.net/manual/en/functions.anonymous.php)

## See Also
- [Anonymous functions in PHP](https://drops-of-php.hi-folks.dev/04-functions/01-fns-anonymous/)

## Related
- [Closure](/features/closure.md)
- [Arrow Functions](/features/arrow-function.md)
- [First Class Callable](/features/first-class-callable.md)
- [Anonymous](/features/anonymous.md)
- [__invoke() Method](/features/__invoke.md)
- [Custom Function](/features/custom-function.md)
- [Functions](/features/function.md)
- [Lexical Variable](/features/lexical.md)

