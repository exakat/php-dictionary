# array_values()
The ``array_values()`` PHP native function returns the values in an array, with automatically generated indexes. It reindexes the values as if they all were appended in the array, on after the other.

The values are in the same order than in the original array.

``array_values()`` provides a way to reach the n-th value in an array, when the keys have been set arbitrarily. For the first value, there is the function ``array_first()``.
```php
<?php

    $array = ['a' => 1, 'b' => 2, ];

    // displays [1, 2]
    var_dump(array_values($array)); 

    $array = [-2 => 'a', 3 => 'b', 'c'];
    // displays ['a', 'b', 'c']; 
    // equivalent to [0 => 'a', 1 => 'b', 2 => 'c']; 
    var_dump(array_values($array)); 

    print array_values($array)[0]; // prints the first value, a
    print array_first($array);     // prints the first value, a
    print array_values($array)[1]; // prints the second value, b

?>
```

## See Also

+ [Making Sense of PHP’s array_values() Function](https://clouddevs.com/php/array_values-function/)

Related : [array_keys()](array_keys()), [array_combine()](array_combine())
