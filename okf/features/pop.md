---
type: "PHP Feature"
title: "Pop"
description: "Pop is the operation of removing and returning the last element of a stack or array."
resource: "https://www.php.net/manual/en/function.array-pop.php"
tags: ["native function", "array", "data structure"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Pop

Pop is the operation of removing and returning the last element of a stack or array. It is the counterpart of push, and together they implement the Last-In, First-Out, LIFO, behaviour that defines a stack.

``array_pop()`` removes and returns the last element of an array, reducing its length by one. The array is passed by reference. If the array is empty, ``array_pop()`` returns ``null``.

For queue semantics, the counterpart operation is ``array_shift()``, which removes the first element.

PHP's ``SplStack`` and ``SplDoublyLinkedList`` also expose a ``pop()`` method that follows the same LIFO contract.

```php
<?php

    $stack = [1, 2, 3, 4];
    
    $last = array_pop($stack);
    echo $last;        // 4
    print_r($stack);   // [1, 2, 3]
    
    // Using SplStack
    $splStack = new SplStack();
    $splStack->push('a');
    $splStack->push('b');
    $splStack->push('c');
    
    echo $splStack->pop(); // c

?>
```

## Documentation
- [https://www.php.net/manual/en/function.array-pop.php](https://www.php.net/manual/en/function.array-pop.php)

## See Also
- [SplStack](https://www.php.net/manual/en/class.splstack.php)

## Related
- [array_push()](/features/array_push.md)
- [array_pop()](/features/array_pop.md)
- [Stack](/features/stack.md)
- [SplStack](/features/splstack.md)
- [Last In, First Out (LIFO)](/features/lifo.md)
- [First In, First Out (FIFO)](/features/fifo.md)
- [Data Structure](/features/datastructure.md)
- [Array, []](/features/array.md)
- [Insecure Deserialization](/features/insecure-deserialization.md)

