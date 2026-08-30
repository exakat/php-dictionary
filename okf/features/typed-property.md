---
type: "type"
title: "Typed Property"
description: "A typed property has a type in its definition."
resource: "https://www.php.net/manual/en/language.oop5.properties.php"
tags: ["type", "property"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Typed Property

A typed property has a type in its definition. 

Typed property may have a default value, although it must be compatible with the specified type. Typed properties cannot have a default values when they are typed with an object type.

The type applies all the time: unlike the parameter's type, any usage of the property must be compatible with the type.

Typed properties may be static or not.

Typed properties are a base for ``readonly`` and asymmetric visibility.

```php
<?php

class X {
    private int $i = 1;
    
    private readonly float $y;
    
    public static string $s;
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.properties.php](https://www.php.net/manual/en/language.oop5.properties.php)

## See Also
- [PHP RFC: Typed Properties 2.0](https://wiki.php.net/rfc/typed_properties_v2)

## Related
- [Properties](/features/property.md)
- [Type System](/features/type.md)

