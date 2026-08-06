# Alias Types
An alias type is a short name for several types at once. Under the hood, alias types are union type. 

PHP offers several native alias types, such as ``iterable``, which represents ``array | Traversable``. Alias type are not available for customisation. 

The same rules applies to alias types than other types: for example, ``array | iterable`` produces a 'Duplicate type array is redundant' error.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/alias-types.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/alias-types.html","name":"Alias Types","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"An alias type is a short name for several types at once","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Alias Types.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

function foo(iterable $a) {
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.importing.php)**
## Related

+ [Scalar Types](scalar-typehint.ini.html)
+ [Union Type](union-type.ini.html)
+ [Type System](type.ini.html)
+ [Scalar Types](scalar-type.ini.html)
