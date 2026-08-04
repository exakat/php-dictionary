# is_string()
``is_string()`` is a PHP native function that checks whether a variable is of type ``string``. It returns ``true`` if the value is a string, ``false`` otherwise.

``is_string()`` does not perform any conversion: it only reports the actual internal type. A numeric string like ``"42"`` is a string, and ``is_string()`` returns ``true`` for it, even though ``is_numeric()`` also returns ``true`` for the same value. Objects implementing ``__toString()`` are not strings, even though they may be used anywhere a string is expected through implicit conversion.

It is frequently used in input validation, and in functions accepting mixed arguments that need to branch on whether a string, as opposed to an array, an object, or a number, was actually passed.
```php
<?php

    var_dump(is_string('hello'));  // true
    var_dump(is_string('42'));     // true
    var_dump(is_string(42));       // false

    function greet(mixed $name): string {
        if (!is_string($name)) {
            throw new InvalidArgumentException('Name must be a string');
        }
        return 'Hello, ' . $name;
    }

?>
```

## See Also

+ [Type comparison tables](https://www.php.net/manual/en/types.comparisons.php)

Related : [is_array()](is_array()), [is_bool()](is_bool()), [is_int()](is_int()), [is_iterable()](is_iterable()), [gettype()](gettype()), [__toString() Method](__toString() Method), [Type Checking](Type Checking), [Validation](Validation)
