---
type: "PHP Feature"
title: "new"
description: "``new`` creates a new object from a class."
resource: "https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.new"
tags: ["object", "class"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# new

``new`` creates a new object from a class. This operation is called the instantiation. 

The class must be available at instantiation call: the engine searches for it in the declared classes, then calls the autoloader to find it. In case no class is found, an error is emitted.

The instantiation immediately calls the constructor of the object: it is the method called ``__construct``.

The constructor defines how many arguments are needed. When no argument is needed, ``new`` may also be called without parentheses.

```php
<?php

    class X {
        function __construct($a = 1) {}
    }
    
    // instantiation
    $x = new x($a);
    
    $y = new y;

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.new](https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.new)

## See Also
- [PHP new Keyword - Object Instantiation in PHP](https://zetcode.com/php/new-keyword/)
- [PHP: Objects - Manual](https://www.php.net/manual/en/language.types.object.php)

## Related
- [Chaining New Without Parenthesis](/features/chaining-new-without-parenthesis.md)
- [Dynamic Class](/features/dynamic-class.md)
- [New In Initializers](/features/new-in-initializer.md)
- [New Without Parenthesis](/features/new-without-parenthesis.md)
- [Reflection](/features/reflection.md)
- [instance](/features/instance.md)
- [Static Call](/features/static-call.md)

