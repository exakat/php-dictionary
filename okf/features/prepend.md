---
type: "PHP Feature"
title: "Array Prepend"
description: "Prepend is an array operation, which adds an element at the beginning of the array."
resource: "https://www.php.net/manual/en/language.operators.array.php"
tags: ["array"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Array Prepend

Prepend is an array operation, which adds an element at the beginning of the array. It is also called a shift.

There are one function for this feature: ``array_unshift()``. It takes the array, and the value to add, returns a new array.

The opposite operation is a pop, with the function ``array_shift()``.

```php
<?php

    $array = [1, 2, 3];
    
    array_push($array, 6);
    
    // $array === [1, 2, 3, 6];

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.array.php](https://www.php.net/manual/en/language.operators.array.php)

## See Also
- [array_unshift](https://www.php.net/manual/en/function.array-unshift.php)

## Related
- [Array Append](/features/append.md)
- [array_unshift()](/features/array_unshift.md)
- [array_push()](/features/array_push.md)

