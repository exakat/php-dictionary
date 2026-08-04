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

Related : [array_push()](array_push()), [array_pop()](array_pop()), [Stack](Stack), [SplStack](SplStack), [Last In, First Out (LIFO)](Last In, First Out (LIFO)), [First In, First Out (FIFO)](First In, First Out (FIFO)), [Data Structure](Data Structure), [Array, []](Array, []), [Insecure Deserialization](Insecure Deserialization)
