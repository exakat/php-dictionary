# Set
A set is a data structure that stores unique values with no particular order. PHP has no native set type, but sets can be simulated with array keys, which must be unique and in no particular order, or by using ``Ds\Set`` from the ``ds`` extension.

Sets are useful for membership testing, deduplication, and set operations such as union, intersection, and difference.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/set.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/set.html","name":"Set","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 04 Jul 2026 08:24:06 +0000","dateModified":"Sat, 04 Jul 2026 08:24:06 +0000","description":"A set is a data structure that stores unique values with no particular order","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Set.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Set"}]}]}</script>
```php
<?php

    // Simulated set using array keys
    $set = [];
    $set['apple'] = true;
    $set['banana'] = true;
    $set['apple'] = true; // no-op, key already exists
    
    $isMember = isset($set['apple']); // true
    
    // Using ds extension
    $set = new Ds\Set([1, 2, 3, 2, 1]);
    echo $set->count(); // 3

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Set_(mathematics))**
## See Also

+ [Ds\Set](https://www.php.net/manual/en/class.ds-set.php)
+ [array_unique()](https://www.php.net/manual/en/function.array-unique.php)

## Related

+ [Data Structure](datastructure.html)
+ [Collection](collection.html)
+ [Array, []](array.html)
+ [Data Structure](ds.html)
+ [SplSubject](splsubject.html)

## Related packages

+ [php-ds/php-ds](https://packagist.org/packages/php-ds/php-ds)
