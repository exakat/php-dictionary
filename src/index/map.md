# Map
A map refers to an abstract data type, ADT, that stores key-value pairs, where each key is unique within the map. This feature is supported by array. 

PHP's array syntax supports a feature to assign the index an arbitrary key. A map allows efficient lookup, insertion, and deletion of values based on their associated keys. The key-value pairs are typically unordered, meaning that the order of insertion may not be preserved when iterating over the map's elements.

Maps are also called associative array, dictionary, or hashes.

Maps are useful to associate a value with a specific key and perform operations like searching for a value by its key or updating the value associated with a key. They provide a convenient way to store and retrieve data based on some unique identifier.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/map.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/map.html","name":"Map","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:16:02 +0000","dateModified":"Thu, 09 Jul 2026 08:16:02 +0000","description":"A map refers to an abstract data type, ADT, that stores key-value pairs, where each key is unique within the map","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Map.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Array, []](array.ini.html)
+ [Index For Arrays](index-array.ini.html)
+ [Collection](collection.ini.html)
+ [array\_column](array_column.ini.html)
+ [Cryptographic Hash](hash-crypto.ini.html)
+ [hash() Function](hash-function.ini.html)
+ [Hash](hash.ini.html)
+ [Data Structure](datastructure.ini.html)
+ [Pair](pair.ini.html)
