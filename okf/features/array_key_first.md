---
type: "PHP Feature"
title: "array_key_first()"
description: "``array_key_first()`` is a native PHP function that returns the first key of an array, or null if the array is empty."
resource: "https://www.php.net/manual/en/function.array-key-first.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# array_key_first()

``array_key_first()`` is a native PHP function that returns the first key of an array, or null if the array is empty.

This function does not modify the internal pointer of the array, unlike using ``reset()`` and ``key()``.

```php
<?php

    $array = ['a' => 1, 'b' => 2, 'c' => 3];
    
    $key = array_key_first($array);
    // 'a'

?>
```

## Documentation
- [https://www.php.net/manual/en/function.array-key-first.php](https://www.php.net/manual/en/function.array-key-first.php)

## See Also
- [Introduced array_key_first() and array_key_last() functions - PHP 7.3](https://php.watch/versions/7.3/array-key-first-last)
- [array_key_last()](https://www.php.net/manual/en/function.array-key-last.php)

## Related
- [Array, []](/features/array.md)
- [array_search](/features/array_search.md)

## Details
- PHP since: 8.1

