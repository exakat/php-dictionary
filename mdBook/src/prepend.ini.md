# Array Prepend
Prepend is an array operation, which adds an element at the beginning of the array. It is also called a shift.

There are one function for this feature: ``array_unshift()``. It takes the array, and the value to add, returns a new array.

The opposite operation is a pop, with the function ``array_shift()``.
```php
<?php

    $array = [1, 2, 3];
    
    array_push($array, 6);
    
    // $array === [1, 2, 3, 6];

?>
```

## See Also

+ [array_unshift - PHP Manual](https://www.php.net/manual/en/function.array-unshift.php)

Related : [Array Append](Array Append), [array_unshift()](array_unshift()), [array_push()](array_push())
