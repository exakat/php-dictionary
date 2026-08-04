# array_unique()
The ``array_unique()`` PHP native function removes duplicate values from an array. It is important to note that it treats values as strings for comparison by default, unless a specific sort flag is provided.

The second parameter, ``flags``, can be used to modify the comparison behavior:
- ``SORT_STRING``: compare items as strings, by default.
- ``SORT_REGULAR``: compare items normally. This is equivalent to ``===`` comparison, and works with enumerations.
- ``SORT_NUMERIC``: compare items numerically.
- ``SORT_LOCALE_STRING``: compare items as strings, based on the current locale.
```php
<?php

    $array = [1, '1', 2, 2];
    
    // Default behavior (SORT_STRING): returns [1, 2]
    var_dump(array_unique($array)); 
    
    // SORT_REGULAR: treats 1 and '1' as different if they are of different types
    // Note: with SORT_REGULAR, it still might return only one value if types are loosely equal
    var_dump(array_unique($array, SORT_REGULAR));
    
    // Preserve keys: array_unique preserves keys by default
    $arrayWithKeys = ['a' => 'red', 'b' => 'green', 'c' => 'red'];
    var_dump(array_unique($arrayWithKeys)); // returns ['a' => 'red', 'b' => 'green']

?>
```

## See Also

+ [Understanding and Implementing PHP's `array_unique()` Function](https://reintech.io/blog/understanding-implementing-php-array-unique-function)

Related : [array_keys()](array_keys())
