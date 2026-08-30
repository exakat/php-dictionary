---
type: "PHP Feature"
title: "gettype()"
description: "``gettype()`` is a PHP native function that returns the type of a variable as a string."
resource: "https://www.php.net/manual/en/function.gettype.php"
tags: ["function", "type-checking"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# gettype()

``gettype()`` is a PHP native function that returns the type of a variable as a string. Possible return values are ``"boolean"``, ``"integer"``, ``"double"``, ``"string"``, ``"array"``, ``"object"``, ``"resource"``, ``"resource (closed)"``, ``"NULL"``, and ``"unknown type"``.

These return values are historical and do not match the type names used in type declarations, such as ``int``, ``float``, or ``bool``: for that purpose, ``get_debug_type()``, available since PHP 8.0, is recommended, as it returns the actual type name, including the class name for objects.

``gettype()`` is mostly used for debugging or logging, rather than for type checking in conditional logic: dedicated functions like ``is_array()``, ``is_string()``, ``is_int()``, ``is_bool()`` are faster and clearer for that purpose. Changing a variable's type is done with ``settype()``, the counterpart of ``gettype()``.

```php
<?php

    echo gettype(42);        // integer
    echo gettype(3.14);      // double
    echo gettype('hello');   // string
    echo gettype([1, 2]);    // array
    echo gettype(null);      // NULL
    echo gettype(new stdClass()); // object

?>
```

## Documentation
- [https://www.php.net/manual/en/function.gettype.php](https://www.php.net/manual/en/function.gettype.php)

## See Also
- [Type comparison tables](https://www.php.net/manual/en/types.comparisons.php)

## Related
- [is_array()](/features/is_array.md)
- [is_string()](/features/is_string.md)
- [is_int()](/features/is_int.md)
- [is_bool()](/features/is_bool.md)
- [is_iterable()](/features/is_iterable.md)
- [Type Checking](/features/type-checking.md)
- [Type Juggling](/features/type-juggling.md)

## Details
- Extension: ext-standard

