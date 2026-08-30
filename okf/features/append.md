---
type: "PHP Feature"
title: "Array Append"
description: "Append, or array append, is an array operation, which adds an element at the end of the array."
resource: "https://www.php.net/manual/en/language.operators.array.php"
tags: ["array"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Array Append

Append, or array append, is an array operation, which adds an element at the end of the array. It is also called a push.

There are two operators for this feature ; the ``[]`` operator, which has to be placed after a variable or member. There is also the ``array_push()`` function, which is available as a callback, unlike the operator.

The opposite operation is a pop, with the function ``array_pop()``. ``array_unshift()`` is the append at the beginning of the array.

```php
<?php

    $array = [1, 2, 3];
    $array[] = 4;
    
    $array []= 5; // Same as above, with a notation similar to a short assignation
    
    array_push($array, 6);
    
    // $array === [1, 2, 3, 4, 5, 6];

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.array.php](https://www.php.net/manual/en/language.operators.array.php)

## See Also
- [array_push](https://www.php.net/manual/en/function.array-push.php)

## Related
- [Array Prepend](/features/prepend.md)
- [Square Brackets](/features/square-bracket.md)

