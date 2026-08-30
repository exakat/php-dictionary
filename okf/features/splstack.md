---
type: "PHP Feature"
title: "SplStack"
description: "The ``SplStack`` class is part of the Standard PHP Library, SPL."
resource: "https://www.php.net/manual/en/class.splstack.php"
tags: ["php class"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# SplStack

The ``SplStack`` class is part of the Standard PHP Library, SPL. It provides a stack data structure, Last‑In, First‑Out or LIFO, by extending ``SplDoublyLinkedList`` and setting the iteration mode to treat the list as a stack.

```php
<?php

    $q = new SplStack();
    $q[] = 1;
    $q[] = 2;
    $q[] = 3;
    foreach ($q as $elem)  {
     echo $elem.\n;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/class.splstack.php](https://www.php.net/manual/en/class.splstack.php)

## See Also
- [PHP: SplDoublyLinkedList](https://www.php.net/manual/en/class.spldoublylinkedlist.php)
- [PHP: SplQueue](https://www.php.net/manual/en/class.splqueue.php)

## Related
- [SplDoublyLinkedList](/features/spldoublylinkedlist.md)
- [Last In, First Out (LIFO)](/features/lifo.md)
- [Datastack](/features/datastack.md)
- [Data Structure](/features/datastructure.md)
- [Pop](/features/pop.md)

## Details
- Extension: ext-spl

