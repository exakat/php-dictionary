# array_keys()
``array_keys()`` returns all keys, both integer and string, as a new numerically indexed array.

``array_keys()`` has second parameter, which filters the keys by their corresponding value. Only the keys with the provided value are reported. 

``array_keys()`` has third parameter, which activate the identity comparison for the second argument, rather than the type-juggling default one.

``array_keys()`` always returns a new array with numeric keys starting from 0. It preserves the order of appearance of the matching keys.

``array_keys()`` returns an empty array, when provided with an empty array. It also works with multi-dimensional arrays, but only scans the first level.

``array_keys()`` does not work on objects. It may work, with caveats, by casting the object to array with ``(array)``.

``array_keys()`` is a complement to ``array_values``, which returns only the values. It is the partial contrary to ``array_combine()``.
```php
<?php

    $array = [
        'name'  => 'Alice',
        10      => 'ten',
        'age'   => 25,
        'active'=> true
    ];

    $keys = array_keys($array);
    // Result: ['name', 10, 'age', 'active']

?>
```

## See Also

+ [PHP array_keys: How to Extract Keys in Arrays with Examples](https://flatcoding.com/tutorials/php/php-array_keys-how-to-extract-keys-in-arrays-with-examples/)

Related : [Multidimensional Array](Multidimensional Array), [Cast Operator](Cast Operator), [Comparison](Comparison), [Index For Arrays](Index For Arrays), [array_values()](array_values()), [array_combine()](array_combine()), [array_unique()](array_unique())
