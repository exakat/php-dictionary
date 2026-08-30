---
type: "PHP Feature"
title: "Data Structure"
description: "A data structure is a way of organizing and storing data in memory to enable efficient access and modification."
resource: "https://www.php.net/manual/en/book.spl.php"
tags: ["data"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Data Structure

A data structure is a way of organizing and storing data in memory to enable efficient access and modification. PHP's primary data structures are the classes and arrays, which include indexed arrays, associative arrays, anonymous classes and nested structures in a single construct.

For more specialized needs, the spl and ds extensions offer types beyond the default PHP ones.

Choosing the right data structure has a direct impact on algorithmic complexity and memory usage.

```php
<?php

    use Ds\Vector;
    use Ds\Map;
    
    $vector = new Vector([1, 2, 3]);
    $map    = new Map(['key' => 'value']);
    
    $stack = new SplStack();
    $stack->push('first');

?>
```

## Documentation
- [https://www.php.net/manual/en/book.spl.php](https://www.php.net/manual/en/book.spl.php)

## See Also
- [Data Structures for PHP (ds extension)](https://www.php.net/manual/en/book.ds.php)
- [SPL Data Structures](https://www.php.net/manual/en/spl.datastructures.php)

## Related
- [Array, []](/features/array.md)
- [Data Structure](/features/ds.md)
- [Standard PHP Library (SPL)](/features/spl.md)
- [Collection](/features/collection.md)
- [Deque](/features/deque.md)
- [SplStack](/features/splstack.md)
- [Map](/features/map.md)
- [Tree](/features/tree.md)
- [Queue](/features/queue.md)
- [Algorithmic Complexity](/features/algorithmic-complexity.md)
- [Big-o-notation](/features/big-o-notation.md)
- [Bucket](/features/bucket.md)
- [Handle](/features/handle.md)
- [Pair](/features/pair.md)
- [Pop](/features/pop.md)
- [Sequence](/features/sequence.md)
- [Set](/features/set.md)
- [SplDoublyLinkedList](/features/spldoublylinkedlist.md)
- [SplObjectStorage](/features/splobjectstorage.md)

## Details
- Packagist: [php-ds/php-ds](https://packagist.org/packages/php-ds/php-ds)
- Extension: ext-ds
- Extension: ext-spl

