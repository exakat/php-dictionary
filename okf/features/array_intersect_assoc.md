---
type: "PHP Feature"
title: "array_intersect_assoc()"
description: "``array_intersect_assoc()`` is a PHP native function that computes the intersection of arrays, comparing both keys and values, using their string representation."
resource: "https://www.php.net/manual/en/function.array-intersect-assoc.php"
tags: ["native function", "array", "arbitrary number of argument"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# array_intersect_assoc()

``array_intersect_assoc()`` is a PHP native function that computes the intersection of arrays, comparing both keys and values, using their string representation.

``array_intersect_assoc()`` takes an array ``$array``, and one or several other arrays ``...$arrays``. It returns a new array made of the elements of ``$array`` whose key/value pair is also present, with the same key and the same value, in every other array.

An element is only kept when both its key and its value match an entry in every other array; the same value under a different key, or the same key with a different value, is excluded from the result. Values are compared as strings, so the same false-positive risk as ``array_intersect()`` applies when comparing objects, arrays, or mixed types sharing a string representation.

The complement function is ``array_diff_assoc()``, which returns the elements whose key/value pair is not shared amongst the arrays. ``array_intersect_key()`` compares keys only, and plain ``array_intersect()`` compares values only.

```php
<?php

    $array1 = ['a' => 'green', 'b' => 'brown', 'c' => 'blue', 'red'];
    $array2 = ['a' => 'green', 'yellow', 'red'];

    $result = array_intersect_assoc($array1, $array2);
    print_r($result);
    // ['a' => 'green']

?>
```

## Documentation
- [https://www.php.net/manual/en/function.array-intersect-assoc.php](https://www.php.net/manual/en/function.array-intersect-assoc.php)

## See Also
- [PHP array_intersect_assoc() Function](https://www.w3schools.com/php/func_array_intersect_assoc.asp)
- [PHP array_intersect_assoc - Array Comparison in PHP](https://zetcode.com/php-array/array-intersect-assoc/)

## Related
- [array_intersect()](/features/array_intersect.md)
- [array_intersect_key()](/features/array_intersect_key.md)
- [array_diff_assoc()](/features/array_diff_assoc.md)
- [in_array()](/features/in_array.md)

