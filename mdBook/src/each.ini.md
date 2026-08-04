# each
``each()`` was a native function, that would yield each element in an array. It was used in ``while()`` loops, to traverse lists.

It was deprecated during PHP 7.x and it is completely removed in version 8.0.

The classic ``while(list($key, $value) = each($array)`` structure, shown below, is, nowadays, advantageously replaced by a ``foreach()`` loop.
```php
<?php

    $array = ['a' => 1, 'b' => 3, 'c' => 5];
    while(list($key, $value) = each($array)) {
        print $key . ' => ' . $value . PHP_EOL;
    }

?>
```

## See Also

+ [PHP each() Function](https://www.zetcode.com/php-array/each/)

Related : [Array Element](Array Element)
