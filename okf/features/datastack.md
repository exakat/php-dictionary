---
type: "PHP Feature"
title: "Datastack"
description: "A data stack is a LIFO data structure: the last data added to the stack is the first to get out."
resource: "https://en.wikipedia.org/wiki/Stack_(abstract_data_type)"
tags: ["data structure"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Datastack

A data stack is a LIFO data structure: the last data added to the stack is the first to get out.

A data stack may be implemented with an array, and the ``array_push()``, or ``$array[]`` operator, and the ``array_pop()`` functions. 

There is also a class called ``SplStack``, in the ``spl`` extension, and ``Ds\Stack`` in the ``ds`` extension.

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
- [https://en.wikipedia.org/wiki/Stack_(abstract_data_type)](https://en.wikipedia.org/wiki/Stack_(abstract_data_type))

## See Also
- [Ds\Stack](https://www.php.net/manual/en/class.ds-stack.php)

## Related
- [SplStack](/features/splstack.md)
- [Data Structure](/features/ds.md)
- [Standard PHP Library (SPL)](/features/spl.md)
- [Last In, First Out (LIFO)](/features/lifo.md)
- [Deque](/features/deque.md)
- [Queue](/features/queue.md)
- [Stack](/features/stack.md)

## Details
- Extension: ext-ds
- Extension: ext-spl

