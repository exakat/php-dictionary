# is_array()
``is_array()`` is a PHP native function that checks whether a variable is of type array. It returns ``true`` if the value is an array, ``false`` otherwise.

This function is essential for type checking and validation before performing array operations. It is commonly used in:

+ Input validation to ensure expected data structures
+ Conditional logic before array manipulation functions
+ Type-safe function implementations
+ Preventing errors when working with mixed-type data

``is_array()`` distinguishes arrays from other PHP data types, including objects, even if those objects implement ``ArrayAccess`` or ``IteratorAggregate`` interfaces. For checking whether a value is traversable or can be used in a ``foreach`` loop, consider ``is_iterable()`` instead.
```php
<?php

    $data = [1, 2, 3];
    echo is_array($data) ? 'Array' : 'Not an array'; // Array

    $string = 'hello';
    echo is_array($string) ? 'Array' : 'Not an array'; // Not an array

    // Validation before array operations
    $input = json_decode('[1, 2, 3]', true);
    if (is_array($input)) {
        $result = array_map(fn($n) => $n * 2, $input);
        print_r($result);
    }

?>
```

## See Also

+ [Type comparison tables](https://www.php.net/manual/en/types.comparisons.php)

Related : [Array, []](Array, []), [is_object()](is_object()), [is_string()](is_string()), [is_int()](is_int()), [is_bool()](is_bool()), [is_iterable()](is_iterable()), [gettype()](gettype()), [Type Checking](Type Checking), [ArrayAccess](ArrayAccess), [ArrayObject](ArrayObject), [Validation](Validation)
