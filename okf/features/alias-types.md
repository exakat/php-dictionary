---
type: "PHP Feature"
title: "Alias Types"
description: "An alias type, or type alias, is a short name for several types at once."
resource: "https://www.php.net/manual/en/language.namespaces.importing.php"
tags: ["alias"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Alias Types

An alias type, or type alias, is a short name for several types at once. Under the hood, alias types are union types.

PHP offers several native alias types, such as ``iterable``, which represents ``array | Traversable``. Alias types are not available for customisation.

The same rules apply to alias types as other types: for example, ``array | iterable`` produces a 'Duplicate type array is redundant' error.

```php
<?php

function foo(iterable $a) {
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.namespaces.importing.php](https://www.php.net/manual/en/language.namespaces.importing.php)

## See Also
- [PHP: Iterables - Manual](https://www.php.net/manual/en/language.types.iterable.php)
- [Union Types - PHP 8.0 - PHP.Watch](https://php.watch/versions/8.0/union-types)

## Related
- [Union Type](/features/union-type.md)
- [Type System](/features/type.md)
- [Scalar Types](/features/scalar-type.md)

## Details
- PHP since: 8.0

