# Indexed Array
An indexed array is an array whose keys are only integers. The keys may be explicit or implicit.

An array with string index is an associative array.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/indexed-array.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/indexed-array.ini.html","name":"Indexed Array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"An indexed array is an array whose keys are only integers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Indexed Array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$associative = [10 => 'a', 'b'];

echo $associative[10]; // a
echo $associative[0]; // b

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.array.php)**
## Related

+ [Associative Array](associative-array.ini.html)
+ [Array, []](array.ini.html)
+ [Collection](collection.ini.html)

## Related packages

+ [sebastian/object-enumerator](https://packagist.org/packages/sebastian/object-enumerator)
+ [ramsey/collection](https://packagist.org/packages/ramsey/collection)
