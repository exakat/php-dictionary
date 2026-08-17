# Type Coercion
Type coercion is the automatic conversion of a value to match a declared type, when it does not already have that type.

It happens with typed function parameters, return types, and typed properties, whenever ``strict_types`` is not active. In that mode, PHP accepts a wider range of scalar values, and converts them to the expected type: a string like ``'42'`` is coerced to the integer ``42`` when a parameter expects ``int``, a number is coerced to a string, and so on.

Not every value can be coerced: an array cannot be coerced to an ``int``, and a non-numeric string cannot be coerced to a ``float``. In such cases, PHP still raises a ``TypeError``, even without ``strict_types``.

Coercion only applies to scalar type declarations. Objects, arrays, and ``callable`` are never coerced: they must already match the declared type, or a ``TypeError`` is raised, regardless of ``strict_types``.

Coercion is a specific case of type juggling, restricted to the boundary of typed declarations, such as parameters, return values and properties.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coercion.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coercion.html","name":"Type Coercion","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Type coercion is the automatic conversion of a value to match a declared type, when it does not already have that type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Type Coercion.html"]}],"alternateName":["weak-typing"],"keywords":["type","feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strict_types.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-juggling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scalar-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/typeerror.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.declarations.php#language.types.declarations.strict"},{"@type":"CreativeWork","name":"PHP type declarations","url":"https:\/\/www.php.net\/manual\/en\/language.types.declarations.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"coercion"}]}]}</script>
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

+ [strict\_types](strict_types.html)
+ [Type Juggling](type-juggling.html)
+ [Cast Operator](cast.html)
+ [Scalar Types](scalar-type.html)
+ [Type Checking](type-checking.html)
+ [TypeError](typeerror.html)
+ [Type System](type.html)
