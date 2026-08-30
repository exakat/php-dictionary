---
type: "PHP Feature"
title: "array_diff()"
description: "``array_diff()`` is a PHP native function that computes the difference between arrays, comparing values, using their string representation."
resource: "https://www.php.net/manual/en/function.array-diff.php"
tags: ["native function", "array", "arbitrary number of argument"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# array_diff()

``array_diff()`` is a PHP native function that computes the difference between arrays, comparing values, using their string representation.

``array_diff()`` takes an array ``$array``, and one or several other arrays ``...$arrays``. It returns a new array made of the elements of ``$array`` whose value is not present in any of the other arrays, keeping the original keys of ``$array``.

Values are compared as strings, so ``array_diff()`` may report false positives when comparing objects, arrays, or values with mixed types that share the same string representation.

There are several variants of this function: ``array_diff_key()`` compares the keys, instead of the values. ``array_diff_assoc()`` compares both keys and values. ``array_udiff()`` accepts a custom comparison callback for the values.

The complement function is ``array_intersect()``, which returns the elements that are shared amongst the arrays.

```php
<?php

    $array1 = ['a' => 'green', 'b' => 'brown', 'c' => 'blue', 'red'];
    $array2 = ['a' => 'green', 'yellow', 'red'];

    $result = array_diff($array1, $array2);
    print_r($result);
    // ['b' => 'brown', 'c' => 'blue']

?>
```

## Documentation
- [https://www.php.net/manual/en/function.array-diff.php](https://www.php.net/manual/en/function.array-diff.php)

## See Also
- [PHP array_diff - Array Differences in PHP](https://www.zetcode.com/php-array/array-diff/)
- [A Comprehensive Guide to PHP's array_diff() Function](https://reintech.io/blog/comprehensive-guide-to-php-array-diff-function)

## Related
- [array_intersect()](/features/array_intersect.md)
- [array_diff_key()](/features/array_diff_key.md)
- [array_diff_assoc()](/features/array_diff_assoc.md)
- [in_array()](/features/in_array.md)

