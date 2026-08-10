# is\_bool()
``is_bool()`` is a PHP native function that checks whether a variable is of type ``bool``. It returns ``true`` only for the literal values ``true`` and ``false``.

``is_bool()`` distinguishes true booleans from values that are merely truthy or falsy, such as ``0``, ``''``, ``null``, or ``1``, none of which are booleans themselves even though they may evaluate as such in a boolean context. This distinction matters when a function or API explicitly needs to know that a boolean, rather than any falsy or truthy value, was received.

It is commonly used in input validation, for instance when reading configuration values, decoded JSON, or user input, where the caller must confirm that a strict boolean was provided rather than a string like ``"true"`` or an integer like ``1``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_bool.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_bool.html","name":"is_bool()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:20:03 +0000","dateModified":"Thu, 16 Jul 2026 14:20:03 +0000","description":"``is_bool()`` is a PHP native function that checks whether a variable is of type ``bool``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_bool().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"is_bool()"}]}]}</script>
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

+ [Boolean](bool.html)
+ [is\_array()](is_array.html)
+ [is\_int()](is_int.html)
+ [is\_string()](is_string.html)
+ [is\_iterable()](is_iterable.html)
+ [gettype()](gettype.html)
+ [Type Checking](type-checking.html)
+ [Truthy](truthy.html)
+ [Validation](validation.html)
