---
type: "PHP Feature"
title: "Closure"
description: "Closures, also called lambda functions, are anonymous functions: functions without a name."
resource: "https://www.php.net/manual/en/functions.anonymous.php"
tags: ["function", "rfc", "closure"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Closure

Closures, also called lambda functions, are anonymous functions: functions without a name. They are also supported by the eponymous ``Closure`` class.

They are close to the arrow-functions. They are also created with the ``...`` operator, also known as the first class callable.

```php
<?php

    $closure = function ($a) use ($b) {
        return $a + $b + 1;
    };
    print get_class($closure); // Closure

    $closure2 = strtolower(...);
    print get_class($closure2); // Closure

    $closure3 = fn($a, $b) => $a + $b;
    print get_class($closure3); // Closure

?>
```

## Documentation
- [https://www.php.net/manual/en/functions.anonymous.php](https://www.php.net/manual/en/functions.anonymous.php)

## See Also
- [Closure Optimisation (8.6)](https://wiki.php.net/rfc/closure-optimizations)

## Related
- [static](/features/static.md)
- [Arrow Functions](/features/arrow-function.md)
- [Anonymous Function](/features/anonymous-function.md)
- [First Class Callable](/features/first-class-callable.md)
- [Callables](/features/callable.md)
- [Callbacks](/features/callback.md)
- [Anonymous Class](/features/anonymous-class.md)
- [Closure Binding](/features/closure-binding.md)
- [Functions](/features/function.md)
- [Return](/features/return.md)
- [Sort](/features/sort.md)
- [Use](/features/use.md)
- [Callable Arrays](/features/array-callable.md)
- [Array Callback](/features/array-callback.md)
- [Bind](/features/bind.md)
- [Inherited Variable](/features/inherited-variable.md)
- [Closure Class](/features/closure-class.md)
- [Custom Function](/features/custom-function.md)
- [Lexical Variable](/features/lexical.md)
- [Currying](/features/currying.md)
- [Homoiconicity](/features/homoiconicity.md)
- [Meta-object Protocol (MOP)](/features/meta-object-protocol.md)
- [Recursion](/features/recursion.md)

