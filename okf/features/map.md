---
type: "PHP Feature"
title: "Map"
description: "A map refers to an abstract data type, ADT, that stores key-value pairs, where each key is unique within the map."
resource: "https://en.wikipedia.org/wiki/Associative_array"
tags: ["data structure"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Map

A map refers to an abstract data type, ADT, that stores key-value pairs, where each key is unique within the map. This feature is supported by arrays.

PHP's array syntax supports a feature to assign the index an arbitrary key. A map allows efficient lookup, insertion, and deletion of values based on their associated keys. The key-value pairs are typically unordered, meaning that the order of insertion may not be preserved when iterating over the map's elements.

Maps are also called associative array, dictionary, or hashes.

Maps are useful to associate a value with a specific key and perform operations like searching for a value by its key or updating the value associated with a key. They provide a convenient way to store and retrieve data based on some unique identifier.

```php
<?php

    // explicit keys : this is a map
    $array = ['a' => 0, 2 => 1, '123' => 2];
    
    
    // keys are assigned automatically
    $array = [0, 1, 2];

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Associative_array](https://en.wikipedia.org/wiki/Associative_array)

## See Also
- [Associative Arrays in PHP: An Overview](https://www.simplilearn.com/tutorials/php-tutorial/associative-array-in-php)

## Related
- [Array, []](/features/array.md)
- [Index For Arrays](/features/index-array.md)
- [Collection](/features/collection.md)
- [array_column](/features/array_column.md)
- [Cryptographic Hash](/features/hash-crypto.md)
- [hash() Function](/features/hash-function.md)
- [Hash](/features/hash.md)
- [Data Structure](/features/datastructure.md)
- [Pair](/features/pair.md)

