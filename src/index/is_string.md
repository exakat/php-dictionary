# is\_string()
``is_string()`` is a PHP native function that checks whether a variable is of type ``string``. It returns ``true`` if the value is a string, ``false`` otherwise.

``is_string()`` does not perform any conversion: it only reports the actual internal type. A numeric string like ``"42"`` is a string, and ``is_string()`` returns ``true`` for it, even though ``is_numeric()`` also returns ``true`` for the same value. Objects implementing ``__toString()`` are not strings, even though they may be used anywhere a string is expected through implicit conversion.

It is frequently used in input validation, and in functions accepting mixed arguments that need to branch on whether a string, as opposed to an array, an object, or a number, was actually passed.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_string.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_string.html","name":"is_string()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:21:00 +0000","dateModified":"Thu, 16 Jul 2026 14:21:00 +0000","description":"is_string() is a PHP native function that checks whether a variable is of type string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_string.html"]}],"keywords":["function","type-checking","validation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_bool.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_int.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_numeric.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_iterable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gettype.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__tostring.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/validation.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.is-string.php"},{"@type":"CreativeWork","name":"Type comparison tables","url":"https:\/\/www.php.net\/manual\/en\/types.comparisons.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"is_string"}]}]}</script>
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

+ [is\_array()](is_array.html)
+ [is\_bool()](is_bool.html)
+ [is\_int()](is_int.html)
+ [is\_numeric()](is_numeric.html)
+ [is\_iterable()](is_iterable.html)
+ [gettype()](gettype.html)
+ [\_\_toString() Method](__tostring.html)
+ [Type Checking](type-checking.html)
+ [Validation](validation.html)
