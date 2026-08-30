---
type: "PHP Feature"
title: "Array Callback"
description: "An array callback is an array of two elements, which may be used as a callback function."
resource: "https://www.php.net/manual/en/language.types.callable.php"
tags: ["function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Array Callback

An array callback is an array of two elements, which may be used as a callback function.

The array must have only two elements: the first one is a class name or an object, and the second one is a method name. Then, the method on the class or object is called, when used with the class functioncall syntax.

The array should not use any string keys. It should only use index ``1`` and ``0``, although they may be in wrong order.

```php
<?php

class X {
    function foo() { echo __METHOD__; }
    static function goo() { echo __METHOD__; }
}

$method = [new X, 'foo']; 
$method(); // X::foo

$method = [1 => 'foo', 0 => new X]; // 1 and 0 keys, but wrong order
$method(); // X::foo

$staticMethod = [X::class, 'goo']; 
$staticMethod(); // X::goo

$staticMethod2 = ['\X', 'goo']; 
$staticMethod2(); // X::goo

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.callable.php](https://www.php.net/manual/en/language.types.callable.php)

## See Also
- [PHP Callable & Callback: Pass a Function to Another](https://flatcoding.com/tutorials/php/understanding-the-php-callable-function/)

## Related
- [Callbacks](/features/callback.md)
- [Closure](/features/closure.md)
- [zero](/features/zero.md)
- [one](/features/one.md)

