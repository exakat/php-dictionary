# is\_string()
``is_string()`` is a PHP native function that checks whether a variable is of type ``string``. It returns ``true`` if the value is a string, ``false`` otherwise.

``is_string()`` does not perform any conversion: it only reports the actual internal type. A numeric string like ``"42"`` is a string, and ``is_string()`` returns ``true`` for it, even though ``is_numeric()`` also returns ``true`` for the same value. Objects implementing ``__toString()`` are not strings, even though they may be used anywhere a string is expected through implicit conversion.

It is frequently used in input validation, and in functions accepting mixed arguments that need to branch on whether a string, as opposed to an array, an object, or a number, was actually passed.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/is_string.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/is_string.ini.html","name":"is_string()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:21:00 +0000","dateModified":"Thu, 16 Jul 2026 14:21:00 +0000","description":"``is_string()`` is a PHP native function that checks whether a variable is of type ``string``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/is_string().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/function.is-string.php)**
## See Also

+ [Type comparison tables](https://www.php.net/manual/en/types.comparisons.php)

## Related

+ [is\_array()](is_array.ini.html)
+ [is\_bool()](is_bool.ini.html)
+ [is\_int()](is_int.ini.html)
+ [is\_numeric()](is_numeric.ini.html)
+ [is\_iterable()](is_iterable.ini.html)
+ [gettype()](gettype.ini.html)
+ [\_\_toString() Method](__tostring.ini.html)
+ [Type Checking](type-checking.ini.html)
+ [Validation](validation.ini.html)
