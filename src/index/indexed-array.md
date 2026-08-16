# Indexed Array
An indexed array is an array whose keys are only integers. The keys may be explicit or implicit.

An array with a string index is an associative array.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/indexed-array.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/indexed-array.html","name":"Indexed Array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Aug 2026 07:46:07 +0000","dateModified":"Sun, 16 Aug 2026 07:46:07 +0000","description":"An indexed array is an array whose keys are only integers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Indexed Array.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"indexed-array"}]}]}</script>
```php
<?php

$associative = [10 => 'a', 'b'];

echo $associative[10]; // a
echo $associative[0]; // b

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.array.php)**
## See Also

+ [array_values](https://www.php.net/manual/en/function.array-values.php)
+ [List (abstract data type) (Wikipedia)](https://en.wikipedia.org/wiki/List_(abstract_data_type))

## Related

+ [Associative Array](associative-array.html)
+ [Array, []](array.html)
+ [Collection](collection.html)

## Related packages

+ [sebastian/object-enumerator](https://packagist.org/packages/sebastian/object-enumerator)
+ [ramsey/collection](https://packagist.org/packages/ramsey/collection)
