---
type: "PHP Feature"
title: "Static Method"
description: "Static methods are methods defined with the static keyword."
resource: "https://www.php.net/manual/en/language.oop5.static.php#language.oop5.static.methods"
tags: ["method"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Static Method

Static methods are methods defined with the static keyword. They have to be called with the name of the class, rather than an instantiated object.

```php
<?php

    class X {
        static function foo() {
            echo __METHOD__;
        }
    }
    
    //displays x::foo
    x::foo();

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.static.php#language.oop5.static.methods](https://www.php.net/manual/en/language.oop5.static.php#language.oop5.static.methods)

## See Also
- [When to use static methods](https://verraes.net/2014/06/when-to-use-static-methods-in-php/)
- [When Should You (And Shouldn’t You) Use Static Methods in Laravel/PHP? A Practical Guide](https://medium.com/@laravelprotips/when-should-you-and-shouldnt-you-use-static-methods-in-laravel-php-a-practical-guide-1b1caac46f2d/)
- [Static Methods in PHP: Practical Patterns, Pitfalls, and Production Guidance (2026)](https://thelinuxcode.com/static-methods-in-php-practical-patterns-pitfalls-and-production-guidance-2026/)

## Related
- [Method](/features/method.md)
- [Named Constructors](/features/named-constructor.md)
- [Scope Resolution Operator ::](/features/scope-resolution-operator.md)
- [Static Class](/features/static-class.md)
- [Static Property](/features/static-property.md)
- [Testable](/features/testable.md)

