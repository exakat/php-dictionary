# Map
A map refers to an abstract data type, ADT, that stores key-value pairs, where each key is unique within the map. This feature is supported by arrays.

PHP's array syntax supports a feature to assign the index an arbitrary key. A map allows efficient lookup, insertion, and deletion of values based on their associated keys. The key-value pairs are typically unordered, meaning that the order of insertion may not be preserved when iterating over the map's elements.

Maps are also called associative array, dictionary, or hashes.

Maps are useful to associate a value with a specific key and perform operations like searching for a value by its key or updating the value associated with a key. They provide a convenient way to store and retrieve data based on some unique identifier.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/map.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/map.html","name":"Map","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:51:26 +0000","dateModified":"Tue, 11 Aug 2026 20:51:26 +0000","description":"A map refers to an abstract data type, ADT, that stores key-value pairs, where each key is unique within the map","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Map.html"]}],"keywords":["datastructure"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index-array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/collection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_column.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-crypto.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastructure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pair.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Associative_array"},{"@type":"CreativeWork","name":"Associative Arrays in PHP: An Overview","url":"https:\/\/www.simplilearn.com\/tutorials\/php-tutorial\/associative-array-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"map"}]}]}</script>
```php
<?php

    // explicit keys : this is a map
    $array = ['a' => 0, 2 => 1, '123' => 2];
    
    
    // keys are assigned automatically
    $array = [0, 1, 2];

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Associative_array)**
## See Also

+ [Associative Arrays in PHP: An Overview](https://www.simplilearn.com/tutorials/php-tutorial/associative-array-in-php)

## Related

+ [Array, []](array.html)
+ [Index For Arrays](index-array.html)
+ [Collection](collection.html)
+ [array\_column](array_column.html)
+ [Cryptographic Hash](hash-crypto.html)
+ [hash() Function](hash-function.html)
+ [Hash](hash.html)
+ [Data Structure](datastructure.html)
+ [Pair](pair.html)
