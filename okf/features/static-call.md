---
type: "PHP Feature"
title: "Static Call"
description: "A static call is a call to a structure, where the name of the structure is hardcoded."
resource: "https://www.php.net/manual/en/language.oop5.static.php"
tags: ["dynamic", "syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Static Call

A static call is a call to a structure, where the name of the structure is hardcoded.

A static method may be called with a static call, or with a dynamic call. Both are valid.

```php
<?php

    class X {
        static function foo() {}
    }
    
    new X(); // static call
    
    $class = X::class;
    new $class(); // dynamic call
    
    X::foo(); // static call of a static method
    $class::foo(); // dynamic call of a static method

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.static.php](https://www.php.net/manual/en/language.oop5.static.php)

## See Also
- [Late Static Bindings](https://www.php.net/manual/en/language.oop5.late-static-bindings.php)
- [Method (computer programming)](https://en.wikipedia.org/wiki/Method_(computer_programming))

## Related
- [new](/features/new.md)
- [Dynamic Call](/features/dynamic-call.md)
- [Dynamic Class](/features/dynamic-class.md)

