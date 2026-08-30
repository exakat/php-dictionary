---
type: "magic method"
title: "__call() Method"
description: "``__call()`` is a magic method: it is called when a method cannot be accessed, either because it doesn't exist, or because its visibility prevents it."
resource: "https://www.php.net/manual/en/language.oop5.magic.php"
tags: ["magic method"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# __call() Method

``__call()`` is a magic method: it is called when a method cannot be accessed, either because it doesn't exist, or because its visibility prevents it.

That way, it is possible to dynamically create methods, without hardcoding them.

The ``__call()`` method receives the name of the target-method, and a list of arguments, as an array.

The ``__call()`` method has a related version for static methods, called ``__callStatic()``.

```php
<?php

    class X {
        private $values = ['a' => 1,
                           'b' => 2,
                           ];
    
        // Checks the dictionary, or return 0
        function __call($name, $args) {
            if (method_exists($this, $name)) {
                return $this->$name(...$args);
            }
            
            return 0;
        }
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.magic.php](https://www.php.net/manual/en/language.oop5.magic.php)

## See Also
- [PHP _call (Lesson 3: PHP Magic Methods)](https://dev.to/cleancodestudio/php-call-lesson-3-php-magic-methods-5bi0)

## Related
- [__callStatic() Method](/features/__callstatic.md)
- [Magic Methods](/features/magic-method.md)
- [Method](/features/method.md)
- [Proxy](/features/proxy.md)
- [Meta-object Protocol (MOP)](/features/meta-object-protocol.md)
- [Metaclass](/features/metaclass.md)
- [Metaprogramming](/features/metaprogramming.md)
- [Open Class](/features/open-class.md)

