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

## See Also

+ [array_unshift - PHP Manual](https://www.php.net/manual/en/function.array-unshift.php)

Related : [array_shift()](array_shift()), [array_push()](array_push()), [array_pop()](array_pop()), [First In, First Out (FIFO)](First In, First Out (FIFO)), [Last In, First Out (LIFO)](Last In, First Out (LIFO)), [Array Prepend](Array Prepend)
