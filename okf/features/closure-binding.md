---
type: "PHP Feature"
title: "Closure Binding"
description: "A closure acquires values from its context of creation."
resource: "https://www.php.net/manual/en/closure.bind.php"
tags: ["closure"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Closure Binding

A closure acquires values from its context of creation. When the closure is created in a different context than wished, one may rebind the closure to another context.

This is done with the two methods ``Closure::bind()`` and ``Closure::bindTo()``.

```php
<?php

    class A {
        private static function foo() { return 1;}
    }
    
    $closure = function() {
        // Self is undefined here, since it is not inside a class
        return self::foo();
    };
    
    // Self now defined, and set to A
    $bcl1 = Closure::bind($closure, null, 'A');

?>
```

## Documentation
- [https://www.php.net/manual/en/closure.bind.php](https://www.php.net/manual/en/closure.bind.php)

## See Also
- [PHP and Closures: Anonymous Functions and Variable Scoping](https://reintech.io/blog/php-and-closures-anonymous-functions-and-variable-scoping)

## Related
- [Closure](/features/closure.md)
- [Lexical Variable](/features/lexical.md)

