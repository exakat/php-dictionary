# Associative Array
An associative array is an array whose keys are strings; there may also be integer index, mixed with the string ones. 

In the evolution of PHP, associative arrays evolved into objects, where the index in the array turned into property names.

It is possible to use types others than integer and string with an array syntax: this requires building an object for that. This is the case of ``Iterator`` and ``Weakmap``. 

```php
<?php

    $associative = ['a' => 1, 'b' => 4, 3 => 5, 6 ];

    echo $associative['a'];

?>
```

## See Also

+ [Associative Arrays in PHP](https://blog.newtum.com/associative-array-in-php/)
+ [Arrays in PHP: Indexed, Associative, Multidimensional Arrays, and Array Functions](https://developers-heaven.net/blog/arrays-in-php-indexed-associative-multidimensional-arrays-and-array-functions/)

Related : [Indexed Array](Indexed Array), [Array, []](Array, []), [Collection](Collection), [Dictionary](Dictionary), [Index](Index), [ArrayAccess](ArrayAccess), [Pair](Pair), [Iterator](Iterator), [Weakmap](Weakmap)
