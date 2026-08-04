# Data Structure
A data structure is a way of organizing and storing data in memory to enable efficient access and modification. PHP's primary data structure are the classes and arrays, which include indexed arrays, associative arrays, anonymous classes and nested structures in a single construct.

For more specialized needs, the spl and ds extensions offers types beyond the default PHP ones.

Choosing the right data structure has a direct impact on algorithmic complexity and memory usage.
```php
<?php

    use Ds\Vector;
    use Ds\Map;
    
    $vector = new Vector([1, 2, 3]);
    $map    = new Map(['key' => 'value']);
    
    $stack = new SplStack();
    $stack->push('first');

?>
```

## See Also

+ [Data Structures for PHP (ds extension)](https://www.php.net/manual/en/book.ds.php)
+ [SPL Data Structures](https://www.php.net/manual/en/spl.datastructures.php)

Related : [Array, []](Array, []), [Data Structure](Data Structure), [Standard PHP Library (SPL)](Standard PHP Library (SPL)), [Collection](Collection), [Deque](Deque), [SplStack](SplStack), [Map](Map), [Tree](Tree), [Queue](Queue), [Algorithmic Complexity](Algorithmic Complexity), [Big-o-notation](Big-o-notation), [Bucket](Bucket), [Handle](Handle), [Pair](Pair), [Pop](Pop), [Sequence](Sequence), [Set](Set), [SplDoublyLinkedList](SplDoublyLinkedList), [SplObjectStorage](SplObjectStorage)
