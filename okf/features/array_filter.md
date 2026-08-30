---
type: "PHP Feature"
title: "array_filter()"
description: "``array_filter()`` is a native PHP function that filters elements of an array using a callback."
resource: "https://www.php.net/manual/en/function.array-filter.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# array_filter()

``array_filter()`` is a native PHP function that filters elements of an array using a callback.

It iterates over each value of the array, passing it to the callback function. If the callback returns a truthy value, the element is included in the result array.

When no callback is provided, all entries that evaluate to false are removed.

```php
<?php

    $numbers = [1, 2, 3, 4, 5, 6];
    
    // Filter even numbers
    $evens = array_filter($numbers, fn($n) => $n % 2 === 0);
    // [2, 4, 6]
    
    // Remove falsy values
    $data = [0, 1, '', 'hello', null, true, false];
    $clean = array_filter($data);
    // [1, 'hello', true]

?>
```

## Documentation
- [https://www.php.net/manual/en/function.array-filter.php](https://www.php.net/manual/en/function.array-filter.php)

## See Also
- [How to use array_filter in PHP](https://www.php.net/manual/en/function.array-filter.php#105986)

## Related
- [Array, []](/features/array.md)
- [array_map()](/features/array_map.md)
- [array_walk()](/features/array_walk.md)
- [Closure](/features/closure.md)

