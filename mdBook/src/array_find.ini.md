# array_find()
``array_find()`` is a PHP native function, introduced in version 8.4, that returns the first value of an array for which a callback returns a truthy value, or ``null`` if no element matches.

Unlike ``array_filter()`` followed by picking the first element, ``array_find()`` short-circuits as soon as a match is found, and never builds an intermediate array. It complements ``array_any()`` and ``array_all()``, which only test for the existence of a match without returning the matching value, and ``array_find_key()``, which returns the matching key instead of the value.

Since ``array_find()`` returns ``null`` when nothing matches, and ``null`` may also be a legitimate value already stored in the array, code that must tell the two situations apart should use ``array_find_key()`` and compare it to ``null`` with ``===``, rather than rely on the returned value alone.
```php
<?php

    $numbers = [1, 3, 4, 7, 10];

    $firstEven = array_find($numbers, fn($n) => $n % 2 === 0);
    // 4

    $found = array_find($numbers, fn($n) => $n > 100);
    // null, no element matches

?>
```

## See Also

+ [PHP RFC: array_find](https://wiki.php.net/rfc/array_find)

Related : [array_find_key()](array_find_key()), [array_filter()](array_filter()), [array_search](array_search), [array_walk()](array_walk())
