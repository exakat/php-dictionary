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

Related : [array_unshift()](array_unshift()), [array_pop()](array_pop()), [array_push()](array_push()), [array_splice()](array_splice()), [First In, First Out (FIFO)](First In, First Out (FIFO)), [Queue](Queue)
