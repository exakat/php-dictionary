---
type: "exception"
title: "OutOfRangeException"
description: "``OutOfRangeException`` is a built-in exception class that is used to indicate that an index or value is outside the acceptable range."
resource: "https://www.php.net/manual/en/class.outofrangeexception.php"
tags: ["exception"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# OutOfRangeException

``OutOfRangeException`` is a built-in exception class that is used to indicate that an index or value is outside the acceptable range. It is a subclass of the LogicException class.

The ``OutOfRangeException`` is typically thrown when accessing an array or collection with an index that is either negative or exceeds the valid range of indices. It can also be thrown when working with iterators or other data structures that have a defined range of valid values.

```php
<?php

    $list = new SplDoublyLinkedList();
    
    try {
        // Adding 5 at index 2, while it should be added a 0 (empty list)
        $list->add(2,5);
    } catch (OutOfRangeException $e) {
        echo 'Exception: '.$e->getMessage()."\n";
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/class.outofrangeexception.php](https://www.php.net/manual/en/class.outofrangeexception.php)

## See Also
- [PHP: SPL Exceptions](https://www.php.net/manual/en/spl.exceptions.php)
- [How to use built-in SPL exception classes for better error handling](https://codeutopia.net/blog/2011/05/06/how-to-use-built-in-spl-exception-classes-for-better-error-handling/)

## Related
- [Exception](/features/exception.md)
- [LogicException](/features/logicexception.md)

