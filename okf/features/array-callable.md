---
type: "PHP Feature"
title: "Callable Arrays"
description: "An callable array is an array with index ``0`` and ``1``."
resource: "https://www.php.net/manual/en/language.types.callable.php"
tags: ["function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Callable Arrays

An callable array is an array with index ``0`` and ``1``. The first index is a string, that represents a valid class, or an object. The second argument is a string, which is a method name.

With such a configuration, it is possible to use that array as a callback: either with a static method call, or a normal method call.

```php
<?php

class X {
    static function foo() { echo __METHOD__;}
           function goo() { echo __METHOD__;}
}

$callable1 = [new X, 'goo'];
$callable1(); // X::goo

$callable2 = ['X', 'foo']; 
$callable2(); // X::foo

$callable3 = [X::class, 'foo']; 
$callable3(); // X::foo

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.callable.php](https://www.php.net/manual/en/language.types.callable.php)

## See Also
- [The Wonderful World of Callbacks](https://markbakeruk.net/2021/12/22/the-wonderful-world-of-callbacks/)

## Related
- [Callables](/features/callable.md)
- [Closure](/features/closure.md)
- [one](/features/one.md)
- [zero](/features/zero.md)
- [Arrow Functions](/features/arrow-function.md)

