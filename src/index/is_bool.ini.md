# is\_bool()
``is_bool()`` is a PHP native function that checks whether a variable is of type ``bool``. It returns ``true`` only for the literal values ``true`` and ``false``.

``is_bool()`` distinguishes true booleans from values that are merely truthy or falsy, such as ``0``, ``''``, ``null``, or ``1``, none of which are booleans themselves even though they may evaluate as such in a boolean context. This distinction matters when a function or API explicitly needs to know that a boolean, rather than any falsy or truthy value, was received.

It is commonly used in input validation, for instance when reading configuration values, decoded JSON, or user input, where the caller must confirm that a strict boolean was provided rather than a string like ``"true"`` or an integer like ``1``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/is_bool.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/is_bool.ini.html","name":"is_bool()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:20:03 +0000","dateModified":"Thu, 16 Jul 2026 14:20:03 +0000","description":"``is_bool()`` is a PHP native function that checks whether a variable is of type ``bool``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/is_bool().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/function.is-bool.php)**
## See Also

+ [Type comparison tables](https://www.php.net/manual/en/types.comparisons.php)

## Related

+ [Boolean](bool.ini.html)
+ [is\_array()](is_array.ini.html)
+ [is\_int()](is_int.ini.html)
+ [is\_string()](is_string.ini.html)
+ [is\_iterable()](is_iterable.ini.html)
+ [gettype()](gettype.ini.html)
+ [Type Checking](type-checking.ini.html)
+ [Truthy](truthy.ini.html)
+ [Validation](validation.ini.html)
