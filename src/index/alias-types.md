# Alias Types
An alias type is a short name for several types at once. Under the hood, alias types are union type. 

PHP offers several native alias types, such as ``iterable``, which represents ``array | Traversable``. Alias type are not available for customisation. 

The same rules applies to alias types than other types: for example, ``array | iterable`` produces a 'Duplicate type array is redundant' error.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/alias-types.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/alias-types.html","name":"Alias Types","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"An alias type is a short name for several types at once","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Alias Types.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"alias-types"}]}]}</script>
```php
<?php

function foo(iterable $a) {
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.importing.php)**
## Related

+ [Scalar Types](scalar-typehint.html)
+ [Union Type](union-type.html)
+ [Type System](type.html)
+ [Scalar Types](scalar-type.html)
