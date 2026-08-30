---
type: "PHP Feature"
title: "Set"
description: "A set is a data structure that stores unique values with no particular order."
resource: "https://en.wikipedia.org/wiki/Set_(mathematics)"
tags: ["data structure", "collection"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Set

A set is a data structure that stores unique values with no particular order. PHP has no native set type, but sets can be simulated with array keys, which must be unique and in no particular order, or by using ``Ds\Set`` from the ``ds`` extension.

Sets are useful for membership testing, deduplication, and set operations such as union, intersection, and difference.

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

## Documentation
- [https://en.wikipedia.org/wiki/Set_(mathematics)](https://en.wikipedia.org/wiki/Set_(mathematics))

## See Also
- [Ds\Set](https://www.php.net/manual/en/class.ds-set.php)
- [array_unique()](https://www.php.net/manual/en/function.array-unique.php)

## Related
- [Data Structure](/features/datastructure.md)
- [Collection](/features/collection.md)
- [Array, []](/features/array.md)
- [Data Structure](/features/ds.md)
- [SplSubject](/features/splsubject.md)

## Details
- Packagist: [php-ds/php-ds](https://packagist.org/packages/php-ds/php-ds)
- Extension: ext-ds

