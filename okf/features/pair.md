---
type: "PHP Feature"
title: "Pair"
description: "A pair is a data structure that holds exactly two related values, often a key and a value, or two correlated items."
resource: "https://www.php.net/manual/en/class.ds-pair.php"
tags: ["data structure", "array"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Pair

A pair is a data structure that holds exactly two related values, often a key and a value, or two correlated items. It is one of the simplest compound data structures.

Pairs are commonly represented as a two-element indexed array, a two-element associative array, or a simple object with two properties. PHP does not have a built-in pair type, but the ``Ds\Pair`` class from the Data Structures extension provides a typed key–value pair.

Pairs appear in many contexts: iterating over associative arrays yields key–value pairs, ``array_map()`` with ``null`` as the callback zips arrays into indexed pairs, and functions such as ``array_combine()`` associate two arrays as paired keys and values.

Pairs are also the basis of more complex structures such as maps and dictionaries.

```php
<?php

    // Native: two-element array as a pair
    $pair = ['key' => 'value'];
    
    // Ds\Pair from the Data Structures extension
    $pair = new \Ds\Pair('name', 'Alice');
    echo $pair->key;   // name
    echo $pair->value; // Alice
    
    // Iterating key-value pairs
    $map = ['a' => 1, 'b' => 2];
    foreach ($map as $key => $value) {
        echo "$key => $value\n";
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/class.ds-pair.php](https://www.php.net/manual/en/class.ds-pair.php)

## See Also
- [PHP Ds\Map pairs() Function - GeeksforGeeks](https://www.geeksforgeeks.org/php/php-dsmap-pairs-function/)
- [PHP Ds\Pair copy() Function - GeeksforGeeks](https://www.geeksforgeeks.org/php/php-dspair-copy-function/)

## Related
- [Array, []](/features/array.md)
- [Associative Array](/features/associative-array.md)
- [Data Structure](/features/ds.md)
- [Data Structure](/features/datastructure.md)
- [Map](/features/map.md)
- [Tuple](/features/tuple.md)

## Details
- Extension: ext-ds

