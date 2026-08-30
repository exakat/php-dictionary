---
type: "PHP Feature"
title: "array_pop()"
description: "``array_pop()`` removes the last inserted element in an array, and returns it."
resource: "https://www.php.net/manual/fr/function.array-pop.php"
tags: ["array"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# array_pop()

``array_pop()`` removes the last inserted element in an array, and returns it. The original array is reduced by one element.

``array_pop()`` removes the last element and the last key of the array. The operation is quick, ``O(1)`` of big O complexity. 

``array_pop()`` is the opposite operation of ``array_push()`` and the ``[]`` append operator. With these functions, it is possible to build FIFO stacks.

``array_pop()`` returns the poped value, and modifies the source array in place.

```php
<?php

    $array = [1, 2, 3, 4, 5];
    echo array_pop($array); // 5
    // $array == [1, 2, 3, 4];

    $array = [1, 2, 3, 4];
    $array[] = -2;
    echo array_pop($array); // -2
    
?>
```

## Documentation
- [https://www.php.net/manual/fr/function.array-pop.php](https://www.php.net/manual/fr/function.array-pop.php)

## See Also
- [Introduction to Stacks & Queues in PHP](https://dev.to/matusstafura/introduction-to-stacks-queues-in-php-1lpf)

## Related
- [array_push()](/features/array_push.md)
- [First In, First Out (FIFO)](/features/fifo.md)
- [array_shift()](/features/array_shift.md)
- [array_unshift()](/features/array_unshift.md)
- [Pop](/features/pop.md)

