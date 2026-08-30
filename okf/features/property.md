---
type: "attribute"
title: "Properties"
description: "Class properties are variables, local to an object or a class."
resource: "https://www.php.net/manual/en/language.oop5.properties.php"
tags: ["attribute", "data-container"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Properties

Class properties are variables, local to an object or a class.

Class properties might have visibility, chosen among: public, protected and private. public is the default.

Class properties might have an asymmetric visibility for writing, chosen among: ``public(set)``, ``protected(set)`` and ``private(set)``. By default, it is the same as the read visibility.

Class properties might have a default value. By default it is ``null``.

Class properties might have a type, since PHP 7.4

Class properties might be readonly, for properties which are only set once, and cannot be modified. 

Class properties might be static, and not related to an object, but to a class. 

A property must be uniquely defined in a class. Class properties may be redefined in children or parent when the visibility allows it.

Properties are also called members.

```php
<?php

    class X {
        private $property = 1;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.properties.php](https://www.php.net/manual/en/language.oop5.properties.php)

## See Also
- [Class properties](https://www.php-cpp.com/documentation/properties)

## Related
- [Visibility](/features/visibility.md)
- [static](/features/static.md)
- [Readonly](/features/readonly.md)
- [Attribute](/features/attribute.md)
- [Default Value](/features/default-value.md)
- [Magic Property](/features/magic-property.md)
- [Dynamic Properties](/features/dynamic-property.md)
- [Property Hook](/features/property-hook.md)
- [Type System](/features/type.md)
- [Asymmetric Visibility](/features/asymmetric-visibility.md)
- [Data Container](/features/data-container.md)
- [Static Property](/features/static-property.md)
- [stdclass](/features/stdclass.md)
- [Typed Property](/features/typed-property.md)
- [Method](/features/method.md)
- [Readable](/features/readable.md)
- [Virtual Property](/features/virtual-property.md)
- [Writable](/features/writable.md)
- [get_object_vars()](/features/get_object_vars.md)
- [Promoted Properties](/features/promoted-property.md)
- [Property Type Declaration](/features/type-declaration-property.md)
- [Var](/features/var.md)
- [Writeable](/features/writeable.md)
- [Non-static](/features/non-static.md)
- [State](/features/state.md)
- [Computed Property](/features/computed-property.md)
- [Data Hiding](/features/data-hiding.md)
- [Modifier](/features/modifier.md)
- [Mutable State](/features/mutable-state.md)

