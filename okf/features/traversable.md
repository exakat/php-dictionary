---
type: "PHP Feature"
title: "Traversable"
description: "Traversable is a specific PHP interface that represents an object that can be iterated over."
resource: "https://www.php.net/manual/en/class.traversable.php"
tags: ["interface", "php interface"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Traversable

Traversable is a specific PHP interface that represents an object that can be iterated over.

Traversable is an abstract interface: it cannot be implemented directly, and instead, it must be implemented by either ``IteratorAggregate`` or ``Iterator``. 

The traversable interface is used for typing purposes.

```php
<?php

    try {
        doSomething();
    } catch (\Traversable $e) {
        print "Some error was raised during processing: ". $e::class;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/class.traversable.php](https://www.php.net/manual/en/class.traversable.php)

## See Also
- [Traversable interface in PHP](https://blog.eduonix.com/web-programming-tutorials/traversable-interface-in-php/)

## Related
- [Exception](/features/exception.md)
- [Error](/features/error.md)
- [Iterable](/features/iterable.md)
- [OuterIterator](/features/outeriterator.md)
- [PHP Native Interfaces](/features/php-interface.md)
- [yield from Keyword](/features/yield-from.md)
- [IteratorAggregate](/features/iteratoraggregate.md)

