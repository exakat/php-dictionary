---
type: "PHP Feature"
title: "array_values()"
description: "The ``array_values()`` PHP native function returns the values in an array, with automatically generated indexes."
resource: "https://www.php.net/manual/en/function.array-values.php"
tags: ["php native"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# array_values()

The ``array_values()`` PHP native function returns the values in an array, with automatically generated indexes. It indexes anew the values as if they all were appended in the array, one after the other.

The values are in the same order as in the original array.

``array_values()`` provides a way to reach the value by position or offset, in an array, when the keys have been set arbitrarily. For the first value, there is the function ``array_first()``.

```php
<?php

    $array = ['a' => 1, 'b' => 2, ];

    // displays [1, 2]
    var_dump(array_values($array)); 

    $array = [-2 => 'a', 3 => 'b', 'c'];
    // displays ['a', 'b', 'c']; 
    // equivalent to [0 => 'a', 1 => 'b', 2 => 'c']; 
    var_dump(array_values($array)); 

    print array_values($array)[0]; // prints the first value, a
    print array_first($array);     // prints the first value, a
    print array_values($array)[1]; // prints the second value, b

?>
```

## Documentation
- [https://www.php.net/manual/en/function.array-values.php](https://www.php.net/manual/en/function.array-values.php)

## See Also
- [Making Sense of PHP’s array_values() Function](https://clouddevs.com/php/array_values-function/)

## Related
- [array_keys()](/features/array_keys.md)
- [Index For Arrays](/features/index-array.md)
- [array_combine()](/features/array_combine.md)

