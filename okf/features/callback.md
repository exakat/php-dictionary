---
type: "PHP Feature"
title: "Callbacks"
description: "Callbacks are functions or methods which are used as parameters for other functions."
resource: "https://www.php.net/manual/en/language.types.callable.php"
tags: ["function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Callbacks

Callbacks are functions or methods which are used as parameters for other functions. Such functions are used to customize the calling function. For example, ``array_map()``, which applies a callback to every element of an array, or ``usort()``, which sorts an array using a function.

Callback is akin to a functioncall: it is actually hidden inside the caller function. 

Callback may be build with on closures, arrow-functions, native PHP functions, methods and static methods. They also use string, such as ``strtolower``, and array, such as ``[X::class, 'methodName']``, or ``[$object, 'methodName']``, syntax. In fact, anything that ``is_callable()`` may be used.

```php
<?php

    $array = ['Damien', 'Dan', 'Daniel', 'Davey', 'David', 'Dennis', 'Derick', 'Dmitry', 'Dustin',];
    $array = array_map('strtolower', $array);

    //['damien', 'dan', 'daniel', 'davey', 'david', 'dennis', 'derick', 'dmitry', 'dustin',];

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.callable.php](https://www.php.net/manual/en/language.types.callable.php)

## See Also
- [The Wonderful World of Callbacks](https://markbakeruk.net/2021/12/22/the-wonderful-world-of-callbacks/)
- [Using callbacks to prevent code duplication](https://doeken.org/tip/using-callbacks-to-prevent-code-duplication)
- [How to Use PHP Callbacks: Examples and Guide](https://codernex.hashnode.dev/how-to-use-php-callbacks-examples-and-guide)

## Related
- [Callables](/features/callable.md)
- [Closure](/features/closure.md)
- [String](/features/string.md)
- [Arrow Functions](/features/arrow-function.md)
- [Functions](/features/function.md)
- [Method](/features/method.md)
- [Magic Methods](/features/magic-method.md)
- [Array Callback](/features/array-callback.md)
- [Listener](/features/listener.md)
- [one](/features/one.md)

