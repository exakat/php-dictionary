---
type: "concept"
title: "Array Zip"
description: "Array zip is the operation of combining several arrays element-by-element by position: the first zipped element groups together every array's first item, the second zipped element groups together every array's second item, and so on."
resource: "https://www.php.net/manual/en/function.array-map.php"
tags: ["concept", "arbitrary number of argument"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Array Zip

Array zip is the operation of combining several arrays element-by-element by position: the first zipped element groups together every array's first item, the second zipped element groups together every array's second item, and so on. It is also called a transpose, since it turns a list of parallel arrays into a list of rows, the way ``array_column()`` turns a list of rows into a single column.

PHP has no native ``zip()`` function, but ``array_map()`` performs exactly this operation when its callback is ``null``: instead of applying a callback, ``array_map()`` groups the corresponding elements of the arrays it receives into an array of arrays.

Just like ``array_merge()``, this pattern accepts an arbitrary number of arrays, which may be collected in one array and passed with the spread operator. If the arrays have different lengths, ``array_map()`` pads the shorter ones with ``null``, so the result always has as many rows as the longest input array.

Array zip is not related to the zip archive, which compress data.

```php
<?php

    $names = ['Alice', 'Bob', 'Carol'];
    $ages  = [30, 25, 35];

    $zipped = array_map(null, $names, $ages);
    // [['Alice', 30], ['Bob', 25], ['Carol', 35]]

    $arrays = [$names, $ages]; // may be more...
    array_map(null, ...$arrays);
    // [['Alice', 30], ['Bob', 25], ['Carol', 35]]

    // shorter arrays are padded with null
    array_map(null, [1, 2, 3], ['a', 'b']);
    // [[1, 'a'], [2, 'b'], [3, null]]

?>
```

## Documentation
- [https://www.php.net/manual/en/function.array-map.php](https://www.php.net/manual/en/function.array-map.php)

## See Also
- [Python: zip()](https://docs.python.org/3/library/functions.html#zip)
- [Zipping up multiple arrays using array_map in PHP](https://www.amitmerchant.com/zipping-up-multiple-arrays-using-array-map-in-php/)

## Related
- [array_map()](/features/array_map.md)
- [array_merge()](/features/array_merge.md)
- [array_column](/features/array_column.md)
- [array_combine()](/features/array_combine.md)
- [Array, []](/features/array.md)
- [zip Extension](/features/zip.md)

