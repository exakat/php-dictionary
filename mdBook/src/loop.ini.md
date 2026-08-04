# Loops
A loop is a control structure that allows to execute a block of code repeatedly based on a specified condition. Loops are essential for automating repetitive tasks and processing arrays or collections of data. PHP provides several types of loops, including: for, while, do...while and foreach.

The most popular loop is ``foreach()``.

Loops may hide in certain functions: for example, ``array_map()`` and ``array_walk()`` apply a method to every element in an array. 

Generators are closely related to the ``foreach()`` loop.
```php
<?php

    foreach([11,12,13] as $id => $value) {
        print "$id => $value\n";
    }
    
    for ($i = 1; $i <= 10; $i++) {
        echo $i;
    }
    
    $i = 10;
    while ($i <= 10) {
        echo $i++;  
    }
    
    $i = 10;
    do {
        echo $i++;  
    } while ($i <= 10);

?>
```

Related : [Do While](Do While), [While](While), [Break](Break), [Control Flow](Control Flow), [Dangling Reference](Dangling Reference), [For](For), [foreach()](foreach()), [N+1 Query Problem](N+1 Query Problem), [Array Element](Array Element), [InfiniteIterator](InfiniteIterator), [Nesting](Nesting), [Traversal](Traversal)
