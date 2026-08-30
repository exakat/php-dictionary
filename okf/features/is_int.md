---
type: "PHP Feature"
title: "is_int()"
description: "``is_int()`` is a PHP native function that checks whether a variable is of type ``int``."
resource: "https://www.php.net/manual/en/function.is-int.php"
tags: ["function", "type-checking", "validation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# is_int()

``is_int()`` is a PHP native function that checks whether a variable is of type ``int``. It returns ``true`` if the value is an integer, ``false`` otherwise. ``is_integer()`` and ``is_long()`` are aliases of ``is_int()``.

``is_int()`` returns ``false`` for numeric strings, such as ``"42"``, and for floats, even when they hold a whole number like ``4.0``: only the actual internal ``int`` type qualifies. This makes ``is_int()`` stricter than a numeric check like ``is_numeric()``, which also accepts numeric strings and floats.

It is commonly used to validate array keys, loop counters, or values decoded from external sources, such as JSON, where the distinction between an integer and a numeric string matters, for instance before using the value as an array offset or passing it to a strictly-typed function parameter.

```php
<?php

    var_dump(is_int(42));     // true
    var_dump(is_int(4.0));    // false
    var_dump(is_int('42'));   // false

    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    if (is_int($id)) {
        $user = find_user_by_id($id);
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/function.is-int.php](https://www.php.net/manual/en/function.is-int.php)

## See Also
- [Type comparison tables](https://www.php.net/manual/en/types.comparisons.php)

## Related
- [is_array()](/features/is_array.md)
- [is_bool()](/features/is_bool.md)
- [is_string()](/features/is_string.md)
- [is_float()](/features/is_float.md)
- [is_numeric()](/features/is_numeric.md)
- [is_iterable()](/features/is_iterable.md)
- [gettype()](/features/gettype.md)
- [Type Checking](/features/type-checking.md)
- [Validation](/features/validation.md)

## Details
- Extension: ext-standard

