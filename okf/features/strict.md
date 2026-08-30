---
type: "disambiguation"
title: "Strict"
description: "The word ``strict`` appears in several distinct PHP concepts: + ``strict_types`` declare directive: a per-file directive, ``declare(strict_types=1)``, that disables PHP's automatic scalar type coercion."
tags: ["disambiguation", "type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Strict

The word ``strict`` appears in several distinct PHP concepts:

+ ``strict_types`` declare directive: a per-file directive, ``declare(strict_types=1)``, that disables PHP's automatic scalar type coercion. When active, passing a value of the wrong type to a typed parameter raises a ``TypeError`` rather than silently casting the value.
+ Strict comparison: the use of identity operators ``===`` and ``!==`` instead of equality operators ``==`` and ``!=``. Strict comparison checks both value and type, bypassing type juggling. The ``match`` expression and the third parameter of ``in_array()`` also operate in strict mode.
+ Gradual type checking: the type system is optional and enforced at runtime. ``strict_types`` tightens enforcement within a file but does not affect calls coming from other files. This is distinct from compile-time strict type systems found in statically typed languages.

```php
<?php
declare(strict_types=1);

// strict_types: TypeError, no silent cast
function square(int $n): int { return $n * $n; }

// strict comparison: false, different types
var_dump(0 === false);

// strict in_array: false, '1' !== 1
var_dump(in_array('1', [1, 2, 3], true));

?>
```

## See Also
- [PHP type declarations](https://www.php.net/manual/en/language.types.declarations.php)
- [PHP RFC: Scalar Type Declarations](https://wiki.php.net/rfc/scalar_type_hints_v5)

## Related
- [strict_types](/features/strict_types.md)
- [Strict Comparison](/features/strict-comparison.md)
- [Type Checking](/features/type-checking.md)
- [Relaxed Comparison](/features/relaxed-comparison.md)
- [Type Juggling](/features/type-juggling.md)
- [in_array()](/features/in_array.md)
- [Match](/features/match.md)
- [Gradual Type Checking](/features/gradual-type-checking.md)

