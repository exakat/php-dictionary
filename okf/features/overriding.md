---
type: "PHP Feature"
title: "Overriding"
description: "Overriding is an OOP concept where a child class provides its own implementation of a method that already exists in a parent class."
resource: "https://www.php.net/manual/en/language.oop5.overloading.php"
tags: ["lint but won't execute"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Overriding

Overriding is an OOP concept where a child class provides its own implementation of a method that already exists in a parent class.

Child classes may override constant values, properties and methods. 

When overriding, visibility cannot be reduced. A ``protected`` method or constant may become ``public``, but not ``private``.

The ``#[Override]`` attribute is a helper tool to ensure that a child method overrides a parent method. It is the complement of the ``abstract`` keyword.

Incompatible overriding is not always detected at linting time: this happens when the overriding definition is parsed before the overridden definition.

```php
<?php

class MyParentClass {
    function foo() {}
}

class MyChildClass {
    function foo() {}
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.overloading.php](https://www.php.net/manual/en/language.oop5.overloading.php)

## See Also
- [Function overloading and Overriding in PHP](https://www.geeksforgeeks.org/php/function-overloading-and-overriding-in-php/)

## Related
- [Override Attribute](/features/override.md)
- [Abstract Keyword](/features/abstract.md)
- [Overwrite](/features/overwrite.md)
- [PHP Native Attributes](/features/php-attribute.md)
- [PHP Native Attribute](/features/php-native-attribute.md)

## Details
- PHP since: 7.0+

