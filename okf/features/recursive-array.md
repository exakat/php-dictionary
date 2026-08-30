---
type: "PHP Feature"
title: "Recursive Array"
description: "A recursive array is an array that contains a reference to itself."
resource: "https://en.wikipedia.org/wiki/Circular_reference"
tags: ["self-reference"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Recursive Array

A recursive array is an array that contains a reference to itself. It is a legit construction, although it introduces a loop, between an element and the original variable. This has impact on traversing the array, in particular to count or to compare the array.

```php
<?php

    $a = [1, 2, 3 => &$a];

    print_r($a);
    
    /**
    Array
(
    [0] => 1
    [1] => 2
    [3] => Array
 *RECURSION*
)
*/

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Circular_reference](https://en.wikipedia.org/wiki/Circular_reference)

## See Also
- [References Explained](https://www.php.net/manual/en/language.references.php)

## Related
- [References](/features/reference.md)
- [Array, []](/features/array.md)
- [print_r()](/features/print_r.md)
- [Recursion](/features/recursion.md)
- [RecursiveArrayIterator](/features/recursivearrayiterator.md)

