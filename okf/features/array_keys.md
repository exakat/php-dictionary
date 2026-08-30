---
type: "PHP Feature"
title: "array_keys()"
description: "``array_keys()`` returns all keys, both integer and string, as a new numerically indexed array."
resource: "https://www.php.net/manual/en/function.array-keys.php"
tags: ["php function", "array"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# array_keys()

``array_keys()`` returns all keys, both integer and string, as a new numerically indexed array.

``array_keys()`` has a second parameter, which filters the keys by their corresponding value. Only the keys with the provided value are reported.

``array_keys()`` has a third parameter, which activates the identity comparison for the second argument, rather than the type-juggling default one.

``array_keys()`` always returns a new array with numeric keys starting from 0. It preserves the order of appearance of the matching keys.

``array_keys()`` returns an empty array, when provided with an empty array. It also works with multi-dimensional arrays, but only scans the first level.

``array_keys()`` does not work on objects. It may work, with caveats, by casting the object to array with ``(array)``.

``array_keys()`` is a complement to ``array_values``, which returns only the values. It is the partial contrary to ``array_combine()``.

```php
<?php

    $array = [
        'name'  => 'Alice',
        10      => 'ten',
        'age'   => 25,
        'active'=> true
    ];

    $keys = array_keys($array);
    // Result: ['name', 10, 'age', 'active']

?>
```

## Documentation
- [https://www.php.net/manual/en/function.array-keys.php](https://www.php.net/manual/en/function.array-keys.php)

## See Also
- [PHP array_keys: How to Extract Keys in Arrays with Examples](https://flatcoding.com/tutorials/php/php-array_keys-how-to-extract-keys-in-arrays-with-examples/)

## Related
- [Multidimensional Array](/features/multidimensional-array.md)
- [Cast Operator](/features/cast.md)
- [Comparison](/features/comparison.md)
- [Index For Arrays](/features/index-array.md)
- [array_values()](/features/array_values.md)
- [array_combine()](/features/array_combine.md)
- [array_unique()](/features/array_unique.md)

