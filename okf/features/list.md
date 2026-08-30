---
type: "language construct"
title: "List"
description: "``list()`` acts as the contrary to ``array()``: it will break an array into individual elements, and assign them to the arguments of the list."
resource: "https://www.php.net/manual/en/function.list.php"
tags: ["native function", "language construct"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# List

``list()`` acts as the contrary to ``array()``: it will break an array into individual elements, and assign them to the arguments of the list. 

``list()`` also has a short array version, which is ``[ ]`` the square brackets. Those square brackets only appear on the left side of an assignation.

``list()`` may omit extracted values by skipping their value, and leaving seemingly empty arguments. ``list()`` also supports double-arrow notation, where the key is provided. 

``list()`` may be nested. It may also be used with ``foreach()`` structures.

``list()`` looks like a function, though it is the only one to appears on the left part of an assignation, and is actually a language-construct.

A list is also the name given to arrays where the index are the automatic ones. 

``list()`` is the only expression where successive commas may be used.

```php
<?php

    list($a, $b, $c) = [1,2,3];
    
    [$a, , [$c]] = [1,2,[3],4];
    
    [2 => $c, 0 => $a] = [1,2,3,4];
    
    $rows = [[1,2], [3, 4]];
    foreach($rows as [$a, $b]) {
        print "$a + $b\n";
    }
    
    // Only values are important here
    $list = range(10, 12);
    
    // some keys are missing => not a list
    $array = array(10, 4 => 12);

?>
```

## Documentation
- [https://www.php.net/manual/en/function.list.php](https://www.php.net/manual/en/function.list.php)

## See Also
- [List-o-mania](https://markbakeruk.net/2022/06/06/list-o-mania/)

## Related
- [Array, []](/features/array.md)
- [Comma](/features/comma.md)
- [Double Arrow](/features/double-arrow.md)
- [Square Brackets](/features/square-bracket.md)
- [Tree](/features/tree.md)
- [foreach()](/features/foreach.md)
- [Sequence](/features/sequence.md)
- [Swap](/features/swap.md)
- [Assignment](/features/assignment.md)
- [Multiple Return Values](/features/multiple-return-value.md)
- [Structural Pattern Matching](/features/structural-pattern-matching.md)
- [Tuple](/features/tuple.md)
- [Destructuring](/features/destructuring.md)

