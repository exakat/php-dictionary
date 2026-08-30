---
type: "PHP Feature"
title: "array_combine()"
description: "``array_combine()`` creates an array from an array of keys and an array of values."
resource: "https://www.php.net/manual/en/function.array-combine.php"
tags: ["php function", "array"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# array_combine()

``array_combine()`` creates an array from an array of keys and an array of values. 

Both arguments are treated as lists: their respective keys are discarded, and only their positions are used. The arrays are not sorted. 

Both arguments must have the same number of elements.

``array_combine()`` is the opposite of ``array_keys`` and ``array_values`` together.

```php
<?php

    // adapted from the PHP manual example
    $a = ['green',  4 => 'red', 'c' => 'yellow'];
    $b = ['avocado', 'apple', 'banana'];
    $c = array_combine($a, $b);

    print_r($c);
    
    /**
       Array
    (
        [green] => avocado
        [red] => apple
        [yellow] => banana
    )
    */
    
    var_dump($a === array_combine(array_keys($a), array_values($a)));

?>
```

## Documentation
- [https://www.php.net/manual/en/function.array-combine.php](https://www.php.net/manual/en/function.array-combine.php)

## See Also
- [PHP array_combine() Function - W3Schools](https://www.w3schools.com/php/func_array_combine.asp)
- [PHP's array_combine() Function: A Complete Guide](https://reintech.io/blog/phps-array-combine-function-a-complete-guide)

## Related
- [array_keys()](/features/array_keys.md)
- [array_values()](/features/array_values.md)
- [array_column](/features/array_column.md)

