---
type: "classic bug"
title: "array_merge()"
description: "``array_merge()`` combines all the arrays passed as arguments into one array."
resource: "https://www.php.net/manual/en/function.array-merge.php"
tags: ["native function", "classic bug", "arbitrary number of argument"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# array_merge()

``array_merge()`` combines all the arrays passed as arguments into one array.

``array_merge()`` accepts an arbitrary list of arrays: in terms of performances, it is better to call it with all the arrays once, rather than merge arrays one after the other.

```php
<?php

    $array1 = [1, 2, 3];
    $array2 = [4, 5, 6];
    
    array_merge($array1, $array2);
    // [1, 2, 3, 4, 5, 6];
    
    $arrays = [$array1, $array2]; // may be more... 
    array_merge(...$arrays); 
    // [1, 2, 3, 4, 5, 6];

?>
```

## Documentation
- [https://www.php.net/manual/en/function.array-merge.php](https://www.php.net/manual/en/function.array-merge.php)

## See Also
- [Effortlessly Merge Arrays: When to Use array_merge vs. the Splat Operator](https://medium.com/@jochelle.mendonca/effortlessly-merge-arrays-when-to-use-array-merge-vs-the-splat-operator-4f422baf893b)

## Related
- [Plus +](/features/plus.md)
- [Merge](/features/merge.md)

## Details
- Extension: ext-array

