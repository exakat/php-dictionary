---
type: "keyword"
title: "Break"
description: "``break`` is a control structure, which ends execution of the current ``for``, ``foreach``, ``while``, ``do-while`` or ``switch`` structure."
resource: "https://www.php.net/manual/en/control-structures.break.php"
tags: ["keyword", "changed behavior"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Break

``break`` is a control structure, which ends execution of the current ``for``, ``foreach``, ``while``, ``do-while`` or ``switch`` structure.

``break`` accepts an optional argument, which tells how many enclosing structures are to be broken out of. 

``break`` should not be confused with ``continue``: ``continue`` doesn't work in a ``switch``, like ``break`` does.

```php
<?php

foreach([1,2,3] as $b) {
    // break upon the first even number
    if ($b % 2 == 0) {
        break;
    }
    
    echo $b;
}

foreach([1,2,3] as $b1) {
    foreach([1,2,3] as $b2) {
        // break upon the first even number
        if (($b1 + $b2) % 2 == 0) {
            break 2; // exit both loops
        }
    }
    
    echo $b1 + $b2;
}

?>
```

## Documentation
- [https://www.php.net/manual/en/control-structures.break.php](https://www.php.net/manual/en/control-structures.break.php)

## See Also
- [Difference between break and continue in PHP](https://www.geeksforgeeks.org/php/difference-between-break-and-continue-in-php/)

## Related
- [Continue](/features/continue.md)
- [Switch](/features/switch.md)
- [Loops](/features/loop.md)
- [Control Flow](/features/control-flow.md)
- [InfiniteIterator](/features/infiniteiterator.md)
- [Jump](/features/jump.md)
- [Switch Case](/features/switch-case.md)

## Details
- PHP since: 5.4

