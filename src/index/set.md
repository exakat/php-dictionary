# Set
A set is a data structure that stores unique values with no particular order. PHP has no native set type, but sets can be simulated with array keys, which must be unique and in no particular order, or by using ``Ds\Set`` from the ``ds`` extension.

Sets are useful for membership testing, deduplication, and set operations such as union, intersection, and difference.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/set.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/set.html","name":"Set","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 08:26:08 +0000","dateModified":"Wed, 19 Aug 2026 08:26:08 +0000","description":"A set is a data structure that stores unique values with no particular order","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/set.html"]}],"keywords":["data structure","collection"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastructure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/collection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ds.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splsubject.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Set_(mathematics)"},{"@type":"CreativeWork","name":"Ds\\Set","url":"https:\/\/www.php.net\/manual\/en\/class.ds-set.php"},{"@type":"CreativeWork","name":"array_unique()","url":"https:\/\/www.php.net\/manual\/en\/function.array-unique.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"set"}]}]}</script>
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
