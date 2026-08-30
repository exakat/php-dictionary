---
type: "PHP Feature"
title: "is_numeric()"
description: "``is_numeric()`` is a PHP native function that checks whether a variable is a number or a numeric string."
resource: "https://www.php.net/manual/en/function.is-numeric.php"
tags: ["function", "type-checking", "validation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# is_numeric()

``is_numeric()`` is a PHP native function that checks whether a variable is a number or a numeric string. It returns ``true`` for integers, floats, and strings that represent a valid number, such as ``"42"``, ``"3.14"``, ``" 1e10"``, or ``"0x1A"`` in older PHP versions; it returns ``false`` for non-numeric strings, ``null``, arrays, and booleans.

``is_numeric()`` is deliberately more permissive than ``is_int()`` or ``is_float()``: it accepts leading whitespace, scientific notation, and numeric strings, which makes it well suited to validating raw input from ``$_GET``, ``$_POST``, or a CSV file, where numbers always arrive as strings. It does not, however, confirm the actual internal type, so code that also needs to know whether a value is already an ``int`` versus a numeric ``string`` should combine it with ``is_int()`` or a cast.

Since PHP 8.0, leading numeric strings that also contain trailing non-numeric characters, such as ``"123abc"``, are treated differently from earlier versions: ``is_numeric()`` still returns ``false`` for them, only fully numeric strings qualify.

```php
<?php

    var_dump(is_numeric(42));      // true
    var_dump(is_numeric('42'));    // true
    var_dump(is_numeric('3.14'));  // true
    var_dump(is_numeric('12abc')); // false

    $id = $_GET['id'] ?? '';
    if (is_numeric($id)) {
        $user = find_user_by_id((int) $id);
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/function.is-numeric.php](https://www.php.net/manual/en/function.is-numeric.php)

## See Also
- [Type comparison tables](https://www.php.net/manual/en/types.comparisons.php)

## Related
- [is_int()](/features/is_int.md)
- [is_float()](/features/is_float.md)
- [is_string()](/features/is_string.md)
- [Numeric String](/features/numeric-string.md)
- [Leading Numeric String](/features/leading-numeric-string.md)
- [Type Juggling](/features/type-juggling.md)
- [Validation](/features/validation.md)

## Details
- Extension: ext-standard

