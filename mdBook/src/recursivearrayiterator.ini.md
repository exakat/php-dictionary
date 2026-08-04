# RecursiveArrayIterator
``RecursiveArrayIterator`` extends ``ArrayIterator`` to allow recursive iteration over nested arrays and objects. It implements ``RecursiveIterator``, so it works with ``RecursiveIteratorIterator`` to traverse multidimensional arrays depth-first.
```php
<?php

    $array = ['a', ['b', 'c'], ['d', ['e', 'f']]];
    $iterator = new RecursiveIteratorIterator(
        new RecursiveArrayIterator($array)
    );
    
    foreach ($iterator as $value) {
        echo $value . PHP_EOL;
    }
    // a b c d e f

?>
```

Related : [Standard PHP Library (SPL)](Standard PHP Library (SPL)), [Iterator](Iterator), [Array, []](Array, []), [Recursion](Recursion), [Recursive Array](Recursive Array), [RecursiveIterator](RecursiveIterator), [SplSubject](SplSubject)
