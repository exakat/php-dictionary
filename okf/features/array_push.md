---
type: "PHP Feature"
title: "array_push()"
description: "``array_push()`` adds the second argument, and all the next, to the end of the array, passed as first argument."
resource: "https://www.php.net/manual/fr/function.array-pop.php"
tags: ["array", "arbitrary number of argument"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# array_push()

``array_push()`` adds the second argument, and all the next, to the end of the array, passed as first argument. A new index is created for each new entry, in order.

``array_push()`` adds the new elements and creates the new keys. It is not possible to specify a key with this function: one should use the ``$array['key'] = $value`` syntax.

``array_pop()`` is the equivalent operation of the ``[]`` append operator. It is the opposite of ``array_push()``. With these functions, it is possible to build FIFO stack.

```php
<?php

    $array = [0, 1, 2];
    print array_push($array, 3, 4); // 5, the number of elements
    // $array == [0, 1, 2, 3, 4];

    $array = [0, 1, 2];
    $array[] = 3; 
    // $array == [0, 1, 2, 3];

    $array = [0, 1, 2];
    $array[33] = 3; 
    // $array == [0, 1, 2, 33 => 3];
    
?>
```

## Documentation
- [https://www.php.net/manual/fr/function.array-pop.php](https://www.php.net/manual/fr/function.array-pop.php)

## See Also
- [Introduction to Stacks & Queues in PHP](https://dev.to/matusstafura/introduction-to-stacks-queues-in-php-1lpf)

## Related
- [Index For Arrays](/features/index-array.md)
- [array_pop()](/features/array_pop.md)
- [First In, First Out (FIFO)](/features/fifo.md)
- [array_shift()](/features/array_shift.md)
- [array_unshift()](/features/array_unshift.md)
- [Pop](/features/pop.md)
- [Array Prepend](/features/prepend.md)

