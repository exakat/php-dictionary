# array_pop()
``array_pop()`` removes the last inserted element in an array, and returns it. The original array is reduced by one element.

``array_pop()`` removes the last element and the last key of the array. The operation is quick, ``O(1)`` of big O complexity. 

``array_pop()`` is the opposite operation of ``array_push()`` or the ``[]`` append operator. With these functions, it is possible to build FIFO stack.

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

## See Also

+ [Introduction to Stacks & Queues in PHP](https://dev.to/matusstafura/introduction-to-stacks-queues-in-php-1lpf)

Related : [Array Append](Array Append), [array_push()](array_push()), [First In, First Out (FIFO)](First In, First Out (FIFO)), [array_shift()](array_shift()), [array_unshift()](array_unshift()), [Pop](Pop)
