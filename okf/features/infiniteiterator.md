---
type: "PHP Feature"
title: "InfiniteIterator"
description: "The InfiniteIterator allows one to infinitely iterate over an iterator without having to manually rewind the iterator upon reaching its end."
resource: "https://www.php.net/manual/en/class.infiniteiterator.php"
tags: ["iterator"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# InfiniteIterator

The InfiniteIterator allows one to infinitely iterate over an iterator without having to manually rewind the iterator upon reaching its end.

Infinite iterator works with other iterators. The loop may be broken, as usual, with a ``break`` keyword.

```php
<?php

$versions = [1, 2, 3, 4, 5, 7, 8];

$infinite = new InfiniteIterator(new ArrayIterator($versions));
foreach ($infinite as $value) {
    print "$value\n";
}

?>
```

## Documentation
- [https://www.php.net/manual/en/class.infiniteiterator.php](https://www.php.net/manual/en/class.infiniteiterator.php)

## See Also
- [Iterator](https://www.php.net/manual/en/class.iterator.php)
- [LimitIterator](https://www.php.net/manual/en/class.limititerator.php)

## Related
- [Loops](/features/loop.md)
- [Infinite Loop](/features/infinite-loop.md)
- [Break](/features/break.md)

