---
type: "concept"
title: "Infinite Loop"
description: "An infinite loop never ends, unless there is an external event."
resource: "https://fr.wikipedia.org/wiki/Infinite_Loop"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Infinite Loop

An infinite loop never ends, unless there is an external event.

Infinite loops are usually not wanted, and should be avoided. They are prevented by PHP which enforces a ``max_execution_time`` or ``memory_limit`` error.

```php
<?php

// infinite loop while
while(true) { }

// infinite loop while
do { } while(1);

for(;;) {} 

?>
```

## Documentation
- [https://fr.wikipedia.org/wiki/Infinite_Loop](https://fr.wikipedia.org/wiki/Infinite_Loop)

## See Also
- [Infinite loops in PHP](https://www.exakat.io/infinite-loops-in-php/)

## Related
- [INF](/features/inf.md)
- [Infinite](/features/infinite.md)
- [InfiniteIterator](/features/infiniteiterator.md)
- [max_execution_time](/features/max_execution_time.md)
- [Return Value](/features/return-value.md)

