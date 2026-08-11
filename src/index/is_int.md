# is\_int()
``is_int()`` is a PHP native function that checks whether a variable is of type ``int``. It returns ``true`` if the value is an integer, ``false`` otherwise. ``is_integer()`` and ``is_long()`` are aliases of ``is_int()``.

``is_int()`` returns ``false`` for numeric strings, such as ``"42"``, and for floats, even when they hold a whole number like ``4.0``: only the actual internal ``int`` type qualifies. This makes ``is_int()`` stricter than a numeric check like ``is_numeric()``, which also accepts numeric strings and floats.

It is commonly used to validate array keys, loop counters, or values decoded from external sources, such as JSON, where the distinction between an integer and a numeric string matters, for instance before using the value as an array offset or passing it to a strictly-typed function parameter.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_int.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_int.html","name":"is_int()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:20:19 +0000","dateModified":"Thu, 16 Jul 2026 14:20:19 +0000","description":"``is_int()`` is a PHP native function that checks whether a variable is of type ``int``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_int().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"is_int"}]}]}</script>
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

**[Documentation](https://www.php.net/manual/en/function.is-int.php)**
## See Also

+ [Type comparison tables](https://www.php.net/manual/en/types.comparisons.php)

## Related

+ [is\_array()](is_array.html)
+ [is\_bool()](is_bool.html)
+ [is\_string()](is_string.html)
+ [is\_float()](is_float.html)
+ [is\_numeric()](is_numeric.html)
+ [is\_iterable()](is_iterable.html)
+ [gettype()](gettype.html)
+ [Type Checking](type-checking.html)
+ [Validation](validation.html)
