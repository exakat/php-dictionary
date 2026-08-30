---
type: "PHP Feature"
title: "count()"
description: "``count()`` is a native PHP function, that returns the number of elements in the argument."
resource: "https://www.php.net/manual/en/function.count.php"
tags: ["php function", "array"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# count()

``count()`` is a native PHP function, that returns the number of elements in the argument. 

``count()`` is basically meant to work on arrays: it returns the number of elements in the array. ``count()`` is also able to run recursively, when provided the second argument. 

By extension, ``count()`` works on classes of objects that implement the ``Countable`` interface.

It is a Fatal error to call ``count()`` on an object that can't be counted. Use ``is_countable()`` or type validation to make sure the data may be counted.

```php
<?php

echo count([1,2,3]); // 3

echo count([1,2,3, [4, 5]], COUNT_RECURSIVE); // 6 == 4 + 2 

class X implements Countable {
    function count() : int { 
        // arbitrary count
        return 7;
    }
}

echo count(new X); // 7

?>
```

## Documentation
- [https://www.php.net/manual/en/function.count.php](https://www.php.net/manual/en/function.count.php)

## See Also
- [PHP: sizeof()](https://www.php.net/manual/en/function.sizeof.php)
- [PHP: Countable Interface](https://www.php.net/manual/en/class.countable.php)

## Related
- [Countable Interface](/features/countable.md)
- [Array, []](/features/array.md)
- [Iterable](/features/iterable.md)
- [Multidimensional Array](/features/multidimensional-array.md)

