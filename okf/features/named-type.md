---
type: "type"
title: "Named Type"
description: "A named type is a type with a single name."
resource: "https://www.php.net/manual/en/language.types.declarations.php"
tags: ["type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Named Type

A named type is a type with a single name. This means native types, such as ``never``, ``int`` or ``array`` and custom types, such as classes and interfaces. It actually exclude constructed types, such as union types and intersection types. And DNF is included in union types.

Named types have a related Reflection class: ``ReflectionNamedType``.

```php
<?php

    function foo(A $a) : void {}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.declarations.php](https://www.php.net/manual/en/language.types.declarations.php)

## See Also
- [Union Types vs. Intersection Types | PHPStan](https://phpstan.org/blog/union-types-vs-intersection-types)
- [PHP: Type System - Manual](https://www.php.net/manual/en/language.types.type-system.php)

## Related
- [Name](/features/name.md)
- [Union Type](/features/union-type.md)
- [Intersection Type](/features/intersection-type.md)

## Details
- PHP since: 7.0

