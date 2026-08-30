---
type: "PHP Feature"
title: "is_float()"
description: "``is_float()`` is a PHP native function that checks whether a variable is of type ``float``."
resource: "https://www.php.net/manual/en/function.is-float.php"
tags: ["function", "type-checking", "validation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# is_float()

``is_float()`` is a PHP native function that checks whether a variable is of type ``float``. It returns ``true`` if the value is a float, ``false`` otherwise. ``is_double()`` and ``is_real()`` are aliases of ``is_float()``.

``is_float()`` returns ``false`` for integers, even a whole-number value like ``4``, and for numeric strings such as ``"4.0"``: only the actual internal ``float`` type qualifies. Because floats use binary representation, comparing them for exact equality is unreliable, so ``is_float()`` is generally used to branch on type before further processing, rather than as a stand-in for a numeric range check like ``is_numeric()``.

It is commonly used when validating decoded JSON or configuration values, where distinguishing a float from an integer or a numeric string affects how the value should be formatted or compared.

```php
<?php

    var_dump(is_float(4.0));   // true
    var_dump(is_float(4));     // false
    var_dump(is_float('4.0')); // false

    $price = json_decode('19.99');
    if (is_float($price)) {
        echo number_format($price, 2);
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/function.is-float.php](https://www.php.net/manual/en/function.is-float.php)

## See Also
- [Type comparison tables](https://www.php.net/manual/en/types.comparisons.php)

## Related
- [Floating Point Numbers](/features/float.md)
- [is_int()](/features/is_int.md)
- [is_numeric()](/features/is_numeric.md)
- [is_string()](/features/is_string.md)
- [is_bool()](/features/is_bool.md)
- [gettype()](/features/gettype.md)
- [Type Checking](/features/type-checking.md)
- [Validation](/features/validation.md)

## Details
- Extension: ext-standard

