---
type: "PHP Feature"
title: "Data Structure"
description: "Data Structures, is a PHP extension which provides efficient data structures, provided as an alternative to the array."
resource: "https://medium.com/@rtheunissen/efficient-data-structures-for-php-7-9dda7af674cd"
tags: ["data structure"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Data Structure

Data Structures, is a PHP extension which provides efficient data structures, provided as an alternative to the array. It is available since PHP 7.

In particular, it provides the following structures: 

+ Collection
+ Sequence
+ Vector
+ Deque
+ Map
+ Pair
+ Set
+ Stack
+ Queue
+ PriorityQueue.

```php
<?php

    $stack = [];
    $stack[] = first;
    $stack[] = second;
    // same as array_push($stack, second);
    
    echo array_pop($stack); // Outputs: second

?>
```

## Documentation
- [https://medium.com/@rtheunissen/efficient-data-structures-for-php-7-9dda7af674cd](https://medium.com/@rtheunissen/efficient-data-structures-for-php-7-9dda7af674cd)

## See Also
- [ext-ds](https://www.geeksforgeeks.org/php/php-dsset-functions-complete-reference/)

## Related
- [Collection](/features/collection.md)
- [Set](/features/set.md)
- [Hash](/features/hash.md)
- [Stack](/features/stack.md)
- [Queue](/features/queue.md)
- [Pair](/features/pair.md)
- [Sequence](/features/sequence.md)
- [Datastack](/features/datastack.md)
- [Data Structure](/features/datastructure.md)

## Details
- PHP since: 7.0+
- Extension: ext-spl

