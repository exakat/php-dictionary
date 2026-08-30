---
type: "attribute"
title: "Override Attribute"
description: "This is a native PHP attribute, which tells the engine that a method must be overriding the same method in a parent."
resource: "https://www.php.net/manual/en/language.attributes.classes.php"
tags: ["lint but won't execute", "attribute", "php attribute"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Override Attribute

This is a native PHP attribute, which tells the engine that a method must be overriding the same method in a parent.

The overridden method may be in the parent, or any subsequent parent; it may also be defined in a trait, as a concrete definition or an alias.

The error is only reported at execution time. The same error message is used if the class has no parent, at linting time.

This attribute may be added to any method.

```php
<?php

class MyParentClass {
    function foo() {}
}

class MyChildClass {
    #[Override]
    function foo() {}

    #[Override]
    function goo() {}
    // This raise an error, as goo() has no definition in the parent.
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.attributes.classes.php](https://www.php.net/manual/en/language.attributes.classes.php)

## See Also
- [Understanding PHP #[Override] Attribute: A Beginner's Complete Guide — 2025](https://medium.com/@arifhossen.dev/understanding-php-override-attribute-a-beginners-complete-guide-55275bf7fc87)

## Related
- [Overriding](/features/overriding.md)
- [Overwrite](/features/overwrite.md)
- [PHP Native Attributes](/features/php-attribute.md)
- [PHP Native Attribute](/features/php-native-attribute.md)
- [Attribute Class](/features/attribute-class.md)
- [Method Resolution Order (MRO)](/features/mro.md)

## Details
- PHP since: 8.2+

