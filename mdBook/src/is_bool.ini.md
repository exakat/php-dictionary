# is_bool()
``is_bool()`` is a PHP native function that checks whether a variable is of type ``bool``. It returns ``true`` only for the literal values ``true`` and ``false``.

``is_bool()`` distinguishes true booleans from values that are merely truthy or falsy, such as ``0``, ``''``, ``null``, or ``1``, none of which are booleans themselves even though they may evaluate as such in a boolean context. This distinction matters when a function or API explicitly needs to know that a boolean, rather than any falsy or truthy value, was received.

It is commonly used in input validation, for instance when reading configuration values, decoded JSON, or user input, where the caller must confirm that a strict boolean was provided rather than a string like ``"true"`` or an integer like ``1``.
```php
<?php

    var_dump(is_bool(true));   // true
    var_dump(is_bool(false));  // true
    var_dump(is_bool(1));      // false
    var_dump(is_bool('true')); // false

    $config = json_decode('{"debug": true}', true);
    if (is_bool($config['debug'])) {
        echo 'Debug mode: ' . ($config['debug'] ? 'on' : 'off');
    }

?>
```

## See Also

+ [Type comparison tables](https://www.php.net/manual/en/types.comparisons.php)

Related : [Boolean](Boolean), [is_array()](is_array()), [is_int()](is_int()), [is_string()](is_string()), [is_iterable()](is_iterable()), [gettype()](gettype()), [Type Checking](Type Checking), [Truthy](Truthy), [Validation](Validation)
