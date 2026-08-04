# Compact Array
An array is compact, or packed, if it only uses automated indices, starting with 0. This doesn't really show in the written code, though performances are better for some operations.

Such array's status may be reached by using ``array_values()`` or ``array_keys()`` on the array: such functions reindexes the values in the array.

This notion is not related to the ``compact()`` function.
```php
<?php

    $array = [1,2,3];

    $notCompact = [1,2,3, 4=>4];

    $compactAgain = array_values($notCompact);

?>
```

## See Also

+ [PHP 7 performance improvements (1/5): Packed arrays](https://blog.blackfire.io/php-7-performance-improvements-packed-arrays.html)

Related : [Array, []](Array, []), [compact()](compact()), [array_values()](array_values()), [array_keys()](array_keys()), [Simple Switch](Simple Switch)
