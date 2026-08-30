---
type: "PHP Feature"
title: "Non-instantiable"
description: "Usually, classes are turned into objects via instantiation."
resource: "https://www.php.net/manual/en/language.oop5.basic.php"
tags: ["classes"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Non-instantiable

Usually, classes are turned into objects via instantiation. Yet, some classes are not capable of that: they are non-instantiable.

This is the case of some native classes, such as SQLite3Result, which must be created by the dedicated methods: they can't be created by custom code. 

In userland code, non-instantiable classes have a private constructor, which makes them impossible to instantiate, unless there is a named constructor.

```php
<?php

class X {
    private function __construct() {}
}

// 
new X();

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.basic.php](https://www.php.net/manual/en/language.oop5.basic.php)

## See Also
- [PHP: ReflectionClass::isInstantiable - Manual](https://www.php.net/manual/en/reflectionclass.isinstantiable.php)
- [Private Constructors - Liam Hammett](https://liamhammett.com/private-constructors)

## Related
- [instance](/features/instance.md)

