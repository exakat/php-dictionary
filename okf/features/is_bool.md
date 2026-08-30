---
type: "PHP Feature"
title: "is_bool()"
description: "``is_bool()`` is a PHP native function that checks whether a variable is of type ``bool``."
resource: "https://www.php.net/manual/en/function.is-bool.php"
tags: ["function", "type-checking", "validation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# is_bool()

``is_bool()`` is a PHP native function that checks whether a variable is of type ``bool``. It returns ``true`` only for the literal values ``true`` and ``false``.

``is_bool()`` distinguishes true booleans from values that are merely truthy or falsy, such as ``0``, ``''``, ``null``, or ``1``, none of which are booleans themselves even though they may evaluate as such in a boolean context. This distinction matters when a function or API explicitly needs to know that a boolean, rather than any falsy or truthy value, was received.

It is commonly used in input validation, for instance when reading configuration values, decoded JSON, or user input, where the caller must confirm that a strict boolean was provided rather than a string like ``"true"`` or an integer like ``1``.

```php
<?php

    var_dump(is_bool(true));   // true
    var_dump(is_bool(false));  // true
    var_dump(is_bool(1));      // false
    var_dump(is_bool('true')); // false

    $config = json_decode('{"debug": true}', true);
    if (is_bool($config['debug'])) {
        echo 'Debug mode: ' . ($config['debug'] ? 'on' : 'off');
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/function.is-bool.php](https://www.php.net/manual/en/function.is-bool.php)

## See Also
- [Type comparison tables](https://www.php.net/manual/en/types.comparisons.php)

## Related
- [is_array()](/features/is_array.md)
- [is_int()](/features/is_int.md)
- [is_string()](/features/is_string.md)
- [is_iterable()](/features/is_iterable.md)
- [gettype()](/features/gettype.md)
- [Type Checking](/features/type-checking.md)
- [Truthy](/features/truthy.md)
- [Validation](/features/validation.md)

## Details
- Extension: ext-standard

