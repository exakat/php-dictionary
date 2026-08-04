# Automatic Index
Automatic index is the index that PHP assign to a value, when it is added to an array, without specifying the index. 

By default, the indices start at 0, and are incremented one by one, each time it is needed. It is not incremented when it is not needed. 

The automatic index is needed at the definition of the array, or when using the array append operator ``[]``.

PHP uses the largest integer index that was used in the array, and increment it. That way, no overwrite of the index appears.
```php
<?php

$array = ['a', 'b', 'c'];
// [0 => 'a', 1 => 'b', 2 => 'c']

$array[] = 'd';
// [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd']

$array['e'] = 'f';
// [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd', 'e' => 'f']

$array[] = 'g';
// [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd', 'e' => 'f', 4 => 'g']

$array[11] = 'h';
// [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd', 'e' => 'f', 4 => 'g', 11 => 'h']

$array[] = 'i';
// [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd', 'e' => 'f', 4 => 'g']
// [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd', 'e' => 'f', 4 => 'g', 11 => 'h', 12 => 'i']

?>
```

Related : [Index For Arrays](Index For Arrays), [Hash](Hash)
