# is_int()
``is_int()`` is a PHP native function that checks whether a variable is of type ``int``. It returns ``true`` if the value is an integer, ``false`` otherwise. ``is_integer()`` and ``is_long()`` are aliases of ``is_int()``.

``is_int()`` returns ``false`` for numeric strings, such as ``"42"``, and for floats, even when they hold a whole number like ``4.0``: only the actual internal ``int`` type qualifies. This makes ``is_int()`` stricter than a numeric check like ``is_numeric()``, which also accepts numeric strings and floats.

It is commonly used to validate array keys, loop counters, or values decoded from external sources, such as JSON, where the distinction between an integer and a numeric string matters, for instance before using the value as an array offset or passing it to a strictly-typed function parameter.
```php
<?php

    var_dump(is_int(42));     // true
    var_dump(is_int(4.0));    // false
    var_dump(is_int('42'));   // false

    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    if (is_int($id)) {
        $user = find_user_by_id($id);
    }

?>
```

## See Also

+ [Type comparison tables](https://www.php.net/manual/en/types.comparisons.php)

Related : [is_array()](is_array()), [is_bool()](is_bool()), [is_string()](is_string()), [is_iterable()](is_iterable()), [gettype()](gettype()), [Type Checking](Type Checking), [Validation](Validation)
