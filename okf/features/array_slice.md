---
type: "PHP Feature"
title: "array_slice()"
description: "``array_slice()`` is a PHP native function that extracts a portion of an array."
resource: "https://www.php.net/manual/en/function.array-slice.php"
tags: ["native function", "array"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# array_slice()

``array_slice()`` is a PHP native function that extracts a portion of an array.

``array_slice()`` takes the array ``$array``, starts at the offset ``$offset`` and collects ``$length`` elements. Then it returns the array.

``$offset`` is the position of the index in the array, not the key itself. As usual, it starts at 0. String keys, arbitrary keys, or arbitrary order of the inserted values are ignored: consider that ``array_slice()`` works on the result of ``array_values()``. Use sorting beforehand to ensure the key order is taken into account, when needed.

``array_slice()`` also offers a parameter ``$preserve_keys``, which keeps the original keys: only string keys are preserved, integer keys are reindexed, starting at 0. It is disabled by default.

The complement function is ``array_splice()``, which extracts an array from another, and keeps the external portions.

```php
<?php

    // simple example
    $array = [1, 2, 3, 4,];
    print_r(array_slice($array, 1, 2));
    // [2, 3]

    // use null to reach the end of the array
    print_r(array_slice($array, 2, null));
    // [3, 4]
    
    // with keys
    $array = ['a' => 1, 3 => 2, 3, -1 => 4,];
    print_r(array_slice($array, 1, 2));
    // [2, 3]
    
    // with preserve_keys
    $array = ['a' => 1, 'd' => 2, 5 => 3, -1 => 4,];
    print_r(array_slice($array, 1, 2, true));
    // ['d' => 2, 0 => 3]

?>
```

## Documentation
- [https://www.php.net/manual/en/function.array-slice.php](https://www.php.net/manual/en/function.array-slice.php)

## See Also
- [PHP | Difference between array_slice() and array_splice()](https://www.thedataops.org/php-difference-between-array_slice-and-array_splice/)

## Related
- [array_splice()](/features/array_splice.md)

