---
type: "PHP Feature"
title: "array_intersect_key()"
description: "``array_intersect_key()`` is a PHP native function that computes the intersection of arrays, comparing keys instead of values."
resource: "https://www.php.net/manual/en/function.array-intersect-key.php"
tags: ["native function", "array", "arbitrary number of argument"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# array_intersect_key()

``array_intersect_key()`` is a PHP native function that computes the intersection of arrays, comparing keys instead of values.

``array_intersect_key()`` takes an array ``$array``, and one or several other arrays ``...$arrays``. It returns a new array made of the elements of ``$array`` whose key is also present in every other array, keeping both the original keys and values of ``$array``.

Unlike ``array_intersect()``, the values themselves are never compared or cast to string, so ``array_intersect_key()`` is safe to use with arrays holding objects, arrays, or resources as values.

The complement function is ``array_diff_key()``, which returns the elements whose key is not shared amongst the arrays. ``array_intersect_assoc()`` compares both keys and values.

```php
<?php

    $array1 = ['a' => 'green', 'b' => 'brown', 'c' => 'blue', 'red'];
    $array2 = ['a' => 'yellow', 'b' => 'orange', 'green'];

    $result = array_intersect_key($array1, $array2);
    print_r($result);
    // ['a' => 'green', 'b' => 'brown']

?>
```

## Documentation
- [https://www.php.net/manual/en/function.array-intersect-key.php](https://www.php.net/manual/en/function.array-intersect-key.php)

## See Also
- [PHP array_intersect_key - Array Key Intersection in PHP](https://zetcode.com/php-array/array-intersect-key/)
- [PHP array_intersect_key Function: How it Works with Examples](https://flatcoding.com/tutorials/php/php-array_intersect_key-function-how-it-works-with-examples/)

## Related
- [array_intersect()](/features/array_intersect.md)
- [array_diff_key()](/features/array_diff_key.md)
- [array_intersect_assoc()](/features/array_intersect_assoc.md)
- [array_key_exists()](/features/array_key_exists.md)

