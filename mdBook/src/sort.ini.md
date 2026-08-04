# Sort
Sorting is the action to put a list of object into a specific order. Sorting only applies to arrays: object cannot be sorted.

There are several ways to sort arrays: by value, by key, with ``k`` prefix, or by value while keeping the keys, with the ``a`` prefix, for associative. 

Then, the sort may be ascending, descending, with the ``r`` prefix as as in reverse, or custom, with the ``u`` prefix, as in user sort. Custom sort is done with a closure or similar.

Based on the prefixes above, the following PHP native functions are available: ``sort()``, ``rsort()``, ``usort()``, ``ksort()``, ``krsort()``, ``uksort()``, ``asort()``, ``uasort()``. There is not ``ursort()``, as the reverse part of the sort may be coded in the custom closure.

In case of ex-aequos while sorting, which are values with the same order, the values are sorted in the same order than the original array. This behavior has changed in version 7.0.

It is also possible to sort using a natural sort, which is a way to sort strings like a human would read them: ``natsort()``.

The default comparison between elements may be adapted with ``sort()``'s parameter: regular, numeric, string, locale, natural and with or without case.
```php
<?php

    $fruits = ['Orange1', 'orange2', 'Orange3', 'orange20'];
    sort($fruits, SORT_NATURAL | SORT_FLAG_CASE);
    
    foreach ($fruits as $key => $val) {
        echo 'fruits[' . $key . '] = ' . $val . PHP_EOL;
    }

?>
```

## See Also

+ [natural sort](https://www.php.net/natsort)

Related : [Array, []](Array, []), [Closure](Closure), [Constant Combination](Constant Combination), [Swap](Swap)
