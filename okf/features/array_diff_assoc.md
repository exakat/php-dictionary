---
type: "PHP Feature"
title: "array_diff_assoc()"
description: "``array_diff_assoc()`` is a PHP native function that computes the difference between arrays, comparing both keys and values, using their string representation."
resource: "https://www.php.net/manual/en/function.array-diff-assoc.php"
tags: ["native function", "array", "arbitrary number of argument"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# array_diff_assoc()

``array_diff_assoc()`` is a PHP native function that computes the difference between arrays, comparing both keys and values, using their string representation.

``array_diff_assoc()`` takes an array ``$array``, and one or several other arrays ``...$arrays``. It returns a new array made of the elements of ``$array`` whose key/value pair is not present, with the same key and the same value, in any of the other arrays.

An element is only excluded when both its key and its value match an entry in another array; the same value under a different key, or the same key with a different value, is kept in the result. Values are compared as strings, so the same false-positive risk as ``array_diff()`` applies when comparing objects, arrays, or mixed types sharing a string representation.

The complement function is ``array_intersect_assoc()``, which returns the elements whose key/value pair is shared amongst the arrays. ``array_diff_key()`` compares keys only, and plain ``array_diff()`` compares values only.

```php
<?php

    $array1 = ['a' => 'green', 'b' => 'brown', 'c' => 'blue', 'red'];
    $array2 = ['a' => 'green', 'yellow', 'red'];

    $result = array_diff_assoc($array1, $array2);
    print_r($result);
    // ['b' => 'brown', 'c' => 'blue', 0 => 'red']

?>
```

## Documentation
- [https://www.php.net/manual/en/function.array-diff-assoc.php](https://www.php.net/manual/en/function.array-diff-assoc.php)

## See Also
- [PHP array_diff_assoc - Array Comparison in PHP](https://zetcode.com/php-array/array-diff-assoc/)
- [PHP array_diff_assoc() - Difference of arrays - Examples](https://www.tutorialkart.com/php/php-array-diff-assoc/)

## Related
- [array_diff()](/features/array_diff.md)
- [array_diff_key()](/features/array_diff_key.md)
- [array_intersect_assoc()](/features/array_intersect_assoc.md)
- [in_array()](/features/in_array.md)

