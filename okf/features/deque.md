---
type: "disambiguation"
title: "Deque"
description: "A deque is a special kind of stack and queue."
resource: "https://en.wikipedia.org/wiki/Double-ended_queue"
tags: ["disambiguation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Deque

A deque is a special kind of stack and queue. It is actually both of them at the same time. It allows insertions and deletions at both ends.

```php
<?php

    $deque = new \Ds\Deque();
    
    $deque->insert(0, e);             // [e]
    $deque->insert(1, f);             // [e, f]
    $deque->insert(2, g);             // [e, f, g]
    $deque->insert(0, a, b);        // [a, b, e, f, g]
    $deque->insert(2, ...[c, d]);   // [a, b, c, d, e, f, g]
    
    var_dump($deque);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Double-ended_queue](https://en.wikipedia.org/wiki/Double-ended_queue)

## See Also
- [Algorithms in PHP: Deques (and circular buffers + linked lists)](https://withinboredom.info/posts/algorithms-in-php-deques-and-circular-buffers-linked-lists/)
- [Deque Class](https://www.php.net/manual/en/class.ds-deque.php)

## Related
- [Datastack](/features/datastack.md)
- [Data Structure](/features/datastructure.md)
- [SplDoublyLinkedList](/features/spldoublylinkedlist.md)

## Details
- Extension: ext-ds

