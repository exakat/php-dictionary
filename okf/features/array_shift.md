---
type: "PHP Feature"
title: "array_shift()"
description: "``array_shift()`` is a PHP native function that removes and returns the first element of an array."
resource: "https://www.php.net/manual/en/function.array-shift.php"
tags: ["array"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# array_shift()

``array_shift()`` is a PHP native function that removes and returns the first element of an array. All numeric keys are re-indexed starting from zero; string keys are unaffected.

The operation is ``O(n)`` because all remaining numeric keys must be renumbered after the removal. This makes it slower than ``array_pop()``, which removes the last element in ``O(1)``.

Together with ``array_push()`` or the ``[]`` append operator, ``array_shift()`` enables a FIFO queue pattern.

```php
<?php

    $array = [1, 2, 3, 4, 5];
    echo array_shift($array); // 1
    // $array == [2, 3, 4, 5];

    $array = ['a' => 'x', 0 => 'y', 1 => 'z'];
    echo array_shift($array); // x
    // $array == [0 => 'y', 1 => 'z'];

?>
```

## Documentation
- [https://www.php.net/manual/en/function.array-shift.php](https://www.php.net/manual/en/function.array-shift.php)

## See Also
- [array_unshift](https://www.php.net/manual/en/function.array-unshift.php)
- [Manipulating PHP arrays: push, pop, shift, unshift](https://www.phpzag.com/manipulating-php-arrays-push-pop-shift-unshift/)

## Related
- [array_unshift()](/features/array_unshift.md)
- [array_pop()](/features/array_pop.md)
- [array_push()](/features/array_push.md)
- [array_splice()](/features/array_splice.md)
- [First In, First Out (FIFO)](/features/fifo.md)
- [Queue](/features/queue.md)

