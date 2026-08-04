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

## See Also

+ [Introduction to Stacks & Queues in PHP](https://dev.to/matusstafura/introduction-to-stacks-queues-in-php-1lpf)

Related : [Index For Arrays](Index For Arrays), [array_pop()](array_pop()), [First In, First Out (FIFO)](First In, First Out (FIFO)), [array_shift()](array_shift()), [array_unshift()](array_unshift()), [Pop](Pop), [Array Prepend](Array Prepend)
