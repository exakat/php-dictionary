# array_key_exists()
``array_key_exists()`` reports if a key has been assigned any value in an array. It reports true if it is, and false otherwise.

``array_key_exists()`` is often compared to ``isset()``, although they have differences: ``array_key_exists()`` returns true as long as the index exists, while ``isset()`` also checks the corresponding value for not being null.

Unlike its name, ``array_key_exists()`` works on array as well as objects. This is a deprecated feature, since PHP 8.0.
```php
<?php

    $array = ['a' => 1, 2, 3 => 3, 4 => null];
    var_dump(array_key_exists('a'  , $array));    // true
    var_dump(array_key_exists(1    , $array));    // false (0 => 2)
    var_dump(array_key_exists('3'  , $array));    // true
    var_dump(array_key_exists(4    , $array));    // true
    var_dump(array_key_exists('abc', $array));    // false

?>
```

## See Also

+ [isset() vs array_key_exists()](https://medium.com/@erlandmuchasaj/isset-vs-array-key-exists-b5b054f63eea)

Related : [Isset](Isset)
