---
type: "PHP Feature"
title: "array_unshift()"
description: "``array_unshift()`` prepends one or more elements to the beginning of an array."
resource: "https://www.php.net/array_unshift"
tags: ["array"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# array_unshift()

``array_unshift()`` prepends one or more elements to the beginning of an array. All numeric keys are reset starting from zero, while string keys remain unchanged. The function returns the new number of elements in the array.

``array_unshift()`` is the opposite of ``array_shift()``, which removes and returns the first element. Together with ``array_push()`` and ``array_pop()``, these four functions are used to implement queue, FIFO, or stack, LIFO, data structures.

Note that ``array_unshift()`` is an ``O(n)`` operation because all integer keys must be renumbered.

```php
<?php

    $array = [1, 2, 3];
    $count = array_unshift($array, 0);
    // $array == [0, 1, 2, 3], $count == 4

    // Prepend multiple elements
    array_unshift($array, -2, -1);
    // $array == [-2, -1, 0, 1, 2, 3]

    // String keys are preserved; integer keys are reset
    $assoc = ['b' => 2, 'c' => 3];
    array_unshift($assoc, 1);
    // $assoc == [0 => 1, 'b' => 2, 'c' => 3]

?>
```

## Documentation
- [https://www.php.net/array_unshift](https://www.php.net/array_unshift)

## See Also
- [array_unshift](https://www.php.net/manual/en/function.array-unshift.php)

## Related
- [array_shift()](/features/array_shift.md)
- [array_push()](/features/array_push.md)
- [array_pop()](/features/array_pop.md)
- [First In, First Out (FIFO)](/features/fifo.md)
- [Last In, First Out (LIFO)](/features/lifo.md)
- [Array Prepend](/features/prepend.md)

