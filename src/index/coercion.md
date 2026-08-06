# Type Coercion
Type coercion is the automatic conversion of a value to match a declared type, when it does not already have that type.

It happens with typed function parameters, return types, and typed properties, whenever ``strict_types`` is not active. In that mode, PHP accepts a wider range of scalar values, and converts them to the expected type: a string like ``'42'`` is coerced to the integer ``42`` when a parameter expects ``int``, a number is coerced to a string, and so on.

Not every value can be coerced: an array cannot be coerced to an ``int``, and a non-numeric string cannot be coerced to a ``float``. In such cases, PHP still raises a ``TypeError``, even without ``strict_types``.

Coercion only applies to scalar type declarations. Objects, arrays, and ``callable`` are never coerced: they must already match the declared type, or a ``TypeError`` is raised, regardless of ``strict_types``.

Coercion is a specific case of type juggling, restricted to the boundary of typed declarations, such as parameters, return values and properties.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/coercion.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/coercion.html","name":"Type Coercion","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:14:09 +0000","dateModified":"Thu, 16 Jul 2026 14:14:09 +0000","description":"Type coercion is the automatic conversion of a value to match a declared type, when it does not already have that type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Type Coercion.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function double(int $x): int {
        return $x * 2;
    }

    echo double('21'); // 42 : the string is coerced to an int

    echo double('abc');
    // TypeError: double(): Argument #1 ($x) must be of type int, string given

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.strict)**
## See Also

+ [PHP type declarations](https://www.php.net/manual/en/language.types.declarations.php)

## Related

+ [strict\_types](strict_types.ini.html)
+ [Type Juggling](type-juggling.ini.html)
+ [Cast Operator](cast.ini.html)
+ [Scalar Types](scalar-type.ini.html)
+ [Type Checking](type-checking.ini.html)
+ [TypeError](typeerror.ini.html)
+ [Type System](type.ini.html)
