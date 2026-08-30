---
type: "PHP Feature"
title: "array_intersect()"
description: "``array_intersect()`` is a PHP native function that computes the intersection of arrays, comparing values, using their string representation."
resource: "https://www.php.net/manual/en/function.array-intersect.php"
tags: ["native function", "array", "arbitrary number of argument"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# array_intersect()

``array_intersect()`` is a PHP native function that computes the intersection of arrays, comparing values, using their string representation.

``array_intersect()`` takes an array ``$array``, and one or several other arrays ``...$arrays``. It returns a new array made of the elements of ``$array`` whose value is also present in every other array, keeping the original keys of ``$array``.

Values are compared as strings, so ``array_intersect()`` may report false positives when comparing objects, arrays, or values with mixed types that share the same string representation.

There are several variants of this function: ``array_intersect_key()`` compares the keys, instead of the values. ``array_intersect_assoc()`` compares both keys and values. ``array_uintersect()`` accepts a custom comparison callback for the values.

The complement function is ``array_diff()``, which returns the elements that are not shared amongst the arrays.

```php
<?php

    $array1 = ['a' => 'green', 'b' => 'brown', 'c' => 'blue', 'red'];
    $array2 = ['a' => 'green', 'yellow', 'red'];

    $result = array_intersect($array1, $array2);
    print_r($result);
    // ['a' => 'green', 0 => 'red']

?>
```

## Documentation
- [https://www.php.net/manual/en/function.array-intersect.php](https://www.php.net/manual/en/function.array-intersect.php)

## See Also
- [PHP array_intersect() Function](https://www.w3schools.com/php/func_array_intersect.asp)
- [How to Find Common Elements in Two Arrays in PHP](https://www.slingacademy.com/article/how-to-find-common-elements-in-two-arrays-in-php/)

## Related
- [array_diff()](/features/array_diff.md)
- [array_intersect_key()](/features/array_intersect_key.md)
- [array_intersect_assoc()](/features/array_intersect_assoc.md)
- [in_array()](/features/in_array.md)

