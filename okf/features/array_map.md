---
type: "PHP Feature"
title: "array_map()"
description: "``array_map()`` is a PHP native function that applies a closure to every element of an array."
resource: "https://www.php.net/manual/en/function.array-map.php"
tags: ["native function", "arbitrary number of argument"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# array_map()

``array_map()`` is a PHP native function that applies a closure to every element of an array.

``array_map()`` uses the first argument as the callback, and the following subsequent arguments as one argument of that closure each. Any missing value in an array is assigned as ``null``, while a missing argument is a fatal error.

``array_map()`` only provides the value in the array, and not the related key: this should be done with ``array_walk()``.

```php
<?php

    function square($x) { return $x * $x; }
    
    $array = [1,2,3];
    $squared = array_map(square(...), $array);
    // [1, 4, 9];
    
    function squareSum($x, $y) { return $x ** 2 + $y ** 2; }
    
    $squareSums = array_map(squareSum(...), [1, 2, 3], [4, 5]); // array_map uses the longest array

?>
```

## Documentation
- [https://www.php.net/manual/en/function.array-map.php](https://www.php.net/manual/en/function.array-map.php)

## See Also
- [PHP array_map Function: How to Transform Arrays with Examples](https://flatcoding.com/tutorials/php/array_map/)
- [PHP array_map for associative array](https://inspector.dev/php-array_map-for-associative-array-fast-tips/)

## Related
- [array_walk()](/features/array_walk.md)

