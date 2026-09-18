# Alias Types
An alias type, or type alias, is a short name for several types at once. Under the hood, alias types are union types.

PHP offers several native alias types, such as ``iterable``, which represents ``array | Traversable``. Alias types are not available for customisation.

The same rules apply to alias types as other types: for example, ``array | iterable`` produces a 'Duplicate type array is redundant' error.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/alias-types.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/alias-types.html","name":"Alias Types","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 12 Sep 2026 07:41:19 +0000","dateModified":"Sat, 12 Sep 2026 07:41:19 +0000","description":"An alias type, or type alias, is a short name for several types at once","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/alias-types.html"]}],"alternateName":["type-alias"],"keywords":["alias","feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/union-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scalar-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coercion.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generator.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.namespaces.importing.php"},{"@type":"CreativeWork","name":"PHP: Iterables - Manual","url":"https:\/\/www.php.net\/manual\/en\/language.types.iterable.php"},{"@type":"CreativeWork","name":"Union Types - PHP 8.0 - PHP.Watch","url":"https:\/\/php.watch\/versions\/8.0\/union-types"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.37","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"alias-types"}]}]}</script>
```php
<?php

// iterable is an alias for array|Traversable: both are accepted here
function sumValues(iterable $numbers): int {
    $total = 0;

    foreach ($numbers as $number) {
        $total += $number;
    }

    return $total;
}

echo sumValues([1, 2, 3]); // 6: a plain array is iterable

function threeToFive(): Generator {
    yield 3;
    yield 4;
    yield 5;
}

echo sumValues(threeToFive()); // 12: a Generator is Traversable, also iterable

// function sumValues(array|iterable $numbers): int {} // Fatal error: Duplicate type array is redundant

?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.importing.php)**
## See Also

+ [PHP: Iterables - Manual](https://www.php.net/manual/en/language.types.iterable.php)
+ [Union Types - PHP 8.0 - PHP.Watch](https://php.watch/versions/8.0/union-types)

## Related

+ [Union Type](union-type.html)
+ [Type System](type.html)
+ [Scalar Types](scalar-type.html)
+ [Type Coercion](coercion.html)
+ [Generator](generator.html)
