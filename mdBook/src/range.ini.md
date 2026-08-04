# range()
``range()`` produces an array with all values between the two arguments of the function.

By default, the produced elements are spaced by 1, or another distance when the ``$step`` argument is used. 

When ``$start`` is bigger than ``$end``, the array is descending. Otherwise, it is ascending.

When both ``$start`` and ``$end`` are single byte strings, such as alphabet letters, ``range()`` produces all letters in-between. It does not work on multi-bytes characters, nor with values beyond 255.
```php
<?php

    // 0, 1, 2, 3, 4, 5, 6, 7, 8, 9
    $figures = range(0, 9); 
    
    // 0, 2, 4, 6, 8
    $even = range(0, 9, 2); 
    
    // The ASCII range
    print_r(range(chr(0), chr(231)));

?>
```

## See Also

+ [The Fundamentals of PHP’s range() Function](https://clouddevs.com/php/range-function/)

Related : [Yield](Yield), [Generator](Generator), [yield from Keyword](yield from Keyword), [array_fill()](array_fill()), [array_pad()](array_pad())
