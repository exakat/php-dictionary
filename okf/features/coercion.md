---
type: "type"
title: "Type Coercion"
description: "Type coercion, a form of weak typing, is the automatic conversion of a value to match a declared type, when it does not already have that type."
resource: "https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.strict"
tags: ["type", "feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Type Coercion

Type coercion, a form of weak typing, is the automatic conversion of a value to match a declared type, when it does not already have that type.

It happens with typed function parameters, return types, and typed properties, whenever ``strict_types`` is not active. In that mode, PHP accepts a wider range of scalar values, and converts them to the expected type: a string like ``'42'`` is coerced to the integer ``42`` when a parameter expects ``int``, a number is coerced to a string, and so on.

Not every value can be coerced: an array cannot be coerced to an ``int``, and a non-numeric string cannot be coerced to a ``float``. In such cases, PHP still raises a ``TypeError``, even without ``strict_types``.

Coercion only applies to scalar type declarations. Objects, arrays, and ``callable`` are never coerced: they must already match the declared type, or a ``TypeError`` is raised, regardless of ``strict_types``.

Coercion is a specific case of type juggling, restricted to the boundary of typed declarations, such as parameters, return values and properties.

```php
<?php

    function double(int $x): int {
        return $x * 2;
    }

    echo double('21'); // 42 : the string is coerced to an int

    echo double('abc');
    // TypeError: double(): Argument #1 ($x) must be of type int, string given

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.strict](https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.strict)

## See Also
- [PHP type declarations](https://www.php.net/manual/en/language.types.declarations.php)

## Related
- [strict_types](/features/strict_types.md)
- [Type Juggling](/features/type-juggling.md)
- [Cast Operator](/features/cast.md)
- [Scalar Types](/features/scalar-type.md)
- [Type Checking](/features/type-checking.md)
- [TypeError](/features/typeerror.md)
- [Type System](/features/type.md)

## Details
- PHP since: 7.0

