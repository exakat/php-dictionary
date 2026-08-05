# is\_array()
``is_array()`` is a PHP native function that checks whether a variable is of type array. It returns ``true`` if the value is an array, ``false`` otherwise.

This function is essential for type checking and validation before performing array operations. It is commonly used in:

+ Input validation to ensure expected data structures
+ Conditional logic before array manipulation functions
+ Type-safe function implementations
+ Preventing errors when working with mixed-type data

``is_array()`` distinguishes arrays from other PHP data types, including objects, even if those objects implement ``ArrayAccess`` or ``IteratorAggregate`` interfaces. For checking whether a value is traversable or can be used in a ``foreach`` loop, consider ``is_iterable()`` instead.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/is_array.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/is_array.ini.html","name":"is_array()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:20:33 +0000","dateModified":"Thu, 16 Jul 2026 14:20:33 +0000","description":"``is_array()`` is a PHP native function that checks whether a variable is of type array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/is_array().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/function.is-array.php)**
## See Also

+ [Type comparison tables](https://www.php.net/manual/en/types.comparisons.php)

## Related

+ [Array, []](array.ini.html)
+ [is\_object()](is_object.ini.html)
+ [is\_string()](is_string.ini.html)
+ [is\_int()](is_int.ini.html)
+ [is\_bool()](is_bool.ini.html)
+ [is\_iterable()](is_iterable.ini.html)
+ [gettype()](gettype.ini.html)
+ [Type Checking](type-checking.ini.html)
+ [ArrayAccess](arrayaccess.ini.html)
+ [ArrayObject](arrayobject.ini.html)
+ [Validation](validation.ini.html)
