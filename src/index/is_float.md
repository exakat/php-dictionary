# is\_float()
``is_float()`` is a PHP native function that checks whether a variable is of type ``float``. It returns ``true`` if the value is a float, ``false`` otherwise. ``is_double()`` and ``is_real()`` are aliases of ``is_float()``.

``is_float()`` returns ``false`` for integers, even a whole-number value like ``4``, and for numeric strings such as ``"4.0"``: only the actual internal ``float`` type qualifies. Because floats use binary representation, comparing them for exact equality is unreliable, so ``is_float()`` is generally used to branch on type before further processing, rather than as a stand-in for a numeric range check like ``is_numeric()``.

It is commonly used when validating decoded JSON or configuration values, where distinguishing a float from an integer or a numeric string affects how the value should be formatted or compared.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/is_float.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/is_float.html","name":"is_float()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:13:45 +0000","dateModified":"Wed, 05 Aug 2026 08:13:45 +0000","description":"``is_float()`` is a PHP native function that checks whether a variable is of type ``float``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/is_float().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    var_dump(is_float(4.0));   // true
    var_dump(is_float(4));     // false
    var_dump(is_float('4.0')); // false

    $price = json_decode('19.99');
    if (is_float($price)) {
        echo number_format($price, 2);
    }

?>
```

**[Documentation](https://www.php.net/manual/en/function.is-float.php)**
## See Also

+ [Type comparison tables](https://www.php.net/manual/en/types.comparisons.php)

## Related

+ [Floating Point Numbers](float.ini.html)
+ [is\_int()](is_int.ini.html)
+ [is\_numeric()](is_numeric.ini.html)
+ [is\_string()](is_string.ini.html)
+ [is\_bool()](is_bool.ini.html)
+ [gettype()](gettype.ini.html)
+ [Type Checking](type-checking.ini.html)
+ [Validation](validation.ini.html)
