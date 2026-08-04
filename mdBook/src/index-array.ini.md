# Index For Arrays
A index is the identifier of an specific element in an array. They may automatically generated, by simply omitting them at creation time. 

PHP index may be integers or strings only. Other data types generate an error or a type conversion. For example, floats are turned into integer. integer-shaped strings will also be turned into integer.

PHP index start at 0. They may be automatically assigned by appending a new value with the ``[]`` operator: then, they use the greatest available index + 1.
```php
<?php

    $array = ['a', 'b', 'c'];

    echo $array[0];

?>
```

## See Also

+ [PHP: Frankenstein arrays](https://vazaha.blog/en/9/php-frankenstein-arrays)
+ [Filtering an array by keys in PHP](https://yellowduck.be/posts/filtering-an-array-by-keys-in-php)

Related : [Array, []](Array, []), [Data Container](Data Container), [Collection](Collection), [Index](Index), [Map](Map), [negative-index](negative-index), [Square Brackets](Square Brackets), [Array Element](Array Element), [array_keys()](array_keys()), [Automatic Index](Automatic Index), [unset()](unset()), [Array Dot Notation](Array Dot Notation), [array_column](array_column), [array_push()](array_push()), [Offset](Offset), [Multidimensional Array](Multidimensional Array)
