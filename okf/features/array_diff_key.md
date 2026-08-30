---
type: "PHP Feature"
title: "array_diff_key()"
description: "``array_diff_key()`` is a PHP native function that computes the difference between arrays, comparing keys instead of values."
resource: "https://www.php.net/manual/en/function.array-diff-key.php"
tags: ["native function", "array", "arbitrary number of argument"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# array_diff_key()

``array_diff_key()`` is a PHP native function that computes the difference between arrays, comparing keys instead of values.

``array_diff_key()`` takes an array ``$array``, and one or several other arrays ``...$arrays``. It returns a new array made of the elements of ``$array`` whose key is not present in any of the other arrays, keeping the original keys and values of ``$array``.

Since only the keys are compared, and never cast to string, ``array_diff_key()`` is safe to use with arrays holding objects, arrays, or resources as values.

The complement function is ``array_intersect_key()``, which returns the elements whose key is shared amongst the arrays. ``array_diff_assoc()`` compares both keys and values, while plain ``array_diff()`` compares values only.

```php
<?php

    $array1 = ['a' => 'green', 'b' => 'brown', 'c' => 'blue', 'red'];
    $array2 = ['a' => 'yellow', 'b' => 'orange', 'green'];

    $result = array_diff_key($array1, $array2);
    print_r($result);
    // ['c' => 'blue']

?>
```

## Documentation
- [https://www.php.net/manual/en/function.array-diff-key.php](https://www.php.net/manual/en/function.array-diff-key.php)

## See Also
- [PHP array_diff_key() Function](https://www.w3schools.com/php/func_array_diff_key.asp)

## Related
- [array_diff()](/features/array_diff.md)
- [array_diff_assoc()](/features/array_diff_assoc.md)
- [array_intersect_key()](/features/array_intersect_key.md)
- [array_key_exists()](/features/array_key_exists.md)

