---
type: "magic method"
title: "__callStatic() Method"
description: "``__callStatic()`` is a magic method: it is called when a static method cannot be accessed: either because it doesn't exist or because its visibility prevents it."
resource: "https://www.php.net/manual/en/language.oop5.magic.php"
tags: ["magic method"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# __callStatic() Method

``__callStatic()`` is a magic method: it is called when a static method cannot be accessed: either because it doesn't exist or because its visibility prevents it. 

``__callStatic()`` is not called when the method exists and is not static.

That way, it is possible to create dynamically static methods, without hardcoding them. 

The ``__callStatic()`` method receives the name of the target-method, and a list of arguments. 

The ``__callStatic()`` method has a related version for non-static methods, called ``__call()``.

```php
<?php

    class X {
        // Checks the dictionary, or return 0
        static function __callStatic($name, $args) {
            if (method_exists(self::class, $name)) {
                return X::$name(...$args);
            }
            
            return 0;
        }
        
        private static function foo() {
            print __METHOD__;
        }
    }
    
    X::foo(); // X::foo
    X::bar(); // nothing

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.magic.php](https://www.php.net/manual/en/language.oop5.magic.php)

## See Also
- [Understand more magic methods: __callStatic()](https://dev.to/ngodinhcuong/understand-more-magic-methods-callstatic-2828)
- [PHP __callStatic](https://www.phptutorial.net/php-oop/php-__callstatic/)

## Related
- [Magic Methods](/features/magic-method.md)
- [__call() Method](/features/__call.md)
- [Visibility](/features/visibility.md)

