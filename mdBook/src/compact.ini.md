# compact()
``compact()`` is a native PHP function, which creates an array containing variables and their values, from a list of variable names.

It is the opposite of ``extract()``.
```php
<?php

    $a = '1';
    $b = '2';
    
    $array = compact('a', 'b');
    // ['a' => 1, 'b' => 2];

?>
```

## See Also

+ [``compact()`` function in PHP, and why it is problematic due to its magic behavior](https://gist.github.com/Ocramius/c56a8e8ff25a8e0bd96800c41edab02a)

Related : [extract()](extract()), [Variable Variables](Variable Variables), [Compact Array](Compact Array), [Stubs Files](Stubs Files)
