# array_find_key()
``array_find_key()`` is a PHP native function, introduced in version 8.4 alongside ``array_find()``, that returns the key of the first element of an array for which a callback returns a truthy value, or ``null`` if no element matches.

It is the key-returning counterpart of ``array_find()``: where ``array_find()`` gives back the matching value, ``array_find_key()`` gives back its key, which is useful when the position, or the original index, of the match matters more than the value itself, or when that exact element needs to be updated or removed afterwards.

Because ``0`` and the empty string are valid, yet falsy, array keys, the result of ``array_find_key()`` must be compared against ``null`` with the identical comparison operator ``===``, exactly like the classic ``strpos()`` syndrome, rather than merely tested for truthiness.
```php
<?php

    $fruits = ['apple', 'banana', 'cherry'];

    $key = array_find_key($fruits, fn($f) => str_starts_with($f, 'b'));
    // 1

    $key = array_find_key($fruits, fn($f) => str_starts_with($f, 'z'));
    // null, no element matches

?>
```

## See Also

+ [PHP RFC: array_find](https://wiki.php.net/rfc/array_find)

Related : [array_find()](array_find()), [Strpos() Syndrome](Strpos() Syndrome), [array_search](array_search), [array_key_first()](array_key_first())
