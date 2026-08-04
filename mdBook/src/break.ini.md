# Break
``break`` is a control structure, which ends execution of the current ``for``, ``foreach``, ``while``, ``do-while`` or ``switch`` structure.

``break`` accepts an optional argument, which tells how many enclosing structures are to be broken out of. 

``break`` should not be confused with ``continue``: ``continue`` doesn't work in a ``switch``, like ``break`` does.
```php
<?php

foreach([1,2,3] as $b) {
    // break upon the first even number
    if ($b % 2 == 0) {
        break;
    }
    
    echo $b;
}

foreach([1,2,3] as $b1) {
    foreach([1,2,3] as $b2) {
        // break upon the first even number
        if (($b1 + $b2) % 2 == 0) {
            break 2; // exit both loops
        }
    }
    
    echo $b1 + $b2;
}

?>
```

## See Also

+ [Difference between break and continue in PHP](https://www.geeksforgeeks.org/php/difference-between-break-and-continue-in-php/)
+ [BREAKING MULTIPLE LOOPS IN PHP](https://mmramadan.com/loop-control/breaking-multiple-loops-in-php)

Related : [Continue](Continue), [Switch](Switch), [Loops](Loops), [Control Flow](Control Flow), [InfiniteIterator](InfiniteIterator), [Jump](Jump), [Switch Case](Switch Case)
