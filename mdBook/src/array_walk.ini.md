# array_walk()
``array_walk()`` is a PHP native function that applies a closure to every element of an array.

``array_walk()`` use the first argument as the array or object with the elements, the second argument as the callback, and the following subsequent arguments as one argument of that closure each. Any missing value in an array is assigned as ``null``, while a missing argument is a fatal error.

The callback may take two arguments. This way, it may apply modifications that take the key into account. This is unlike ``array_map()``.

If the walk has to be reflected in the source array, the first argument of the callback must be a reference, and it should be updated.

Although both methods are very similar, ``array_walk()``  and ``array_map()`` do no have the same argument order, return value nor behavior.
```php
<?php

    function square(&$x, $c) { $x = $x * $x + $c; }
    
    $array = [1,2,3];
    array_walk($array, square(...));
    print_r($array);
    // [1, 5, 11];

?>
```

## See Also

+ [Taming PHP’s array_walk() Function: A Detailed Guide](https://clouddevs.com/php/array_walk-function/)

Related : [array_map()](array_map())
