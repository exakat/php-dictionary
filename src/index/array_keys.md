# array\_keys()
``array_keys()`` returns all keys, both integer and string, as a new numerically indexed array.

``array_keys()`` has a second parameter, which filters the keys by their corresponding value. Only the keys with the provided value are reported.

``array_keys()`` has a third parameter, which activates the identity comparison for the second argument, rather than the type-juggling default one.

``array_keys()`` always returns a new array with numeric keys starting from 0. It preserves the order of appearance of the matching keys.

``array_keys()`` returns an empty array, when provided with an empty array. It also works with multi-dimensional arrays, but only scans the first level.

``array_keys()`` does not work on objects. It may work, with caveats, by casting the object to array with ``(array)``.

``array_keys()`` is a complement to ``array_values``, which returns only the values. It is the partial contrary to ``array_combine()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_keys.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_keys.html","name":"array_keys()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:50:44 +0000","dateModified":"Tue, 11 Aug 2026 20:50:44 +0000","description":"array_keys() returns all keys, both integer and string, as a new numerically indexed array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_keys.html"]}],"keywords":["php function","array"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multidimensional-array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/comparison.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index-array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_values.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_combine.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_unique.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.array-keys.php"},{"@type":"CreativeWork","name":"PHP array_keys: How to Extract Keys in Arrays with Examples","url":"https:\/\/flatcoding.com\/tutorials\/php\/php-array_keys-how-to-extract-keys-in-arrays-with-examples\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array_keys"}]}]}</script>
```php
<?php

    $array = [
        'name'  => 'Alice',
        10      => 'ten',
        'age'   => 25,
        'active'=> true
    ];

    $keys = array_keys($array);
    // Result: ['name', 10, 'age', 'active']

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-keys.php)**
## See Also

+ [PHP array_keys: How to Extract Keys in Arrays with Examples](https://flatcoding.com/tutorials/php/php-array_keys-how-to-extract-keys-in-arrays-with-examples/)

## Related

+ [Multidimensional Array](multidimensional-array.html)
+ [Cast Operator](cast.html)
+ [Comparison](comparison.html)
+ [Index For Arrays](index-array.html)
+ [array\_values()](array_values.html)
+ [array\_combine()](array_combine.html)
+ [array\_unique()](array_unique.html)
