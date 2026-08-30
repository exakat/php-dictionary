---
type: "PHP Feature"
title: "array_fill()"
description: "``array_fill()`` is a PHP native function which creates an array with ``$count`` times a specified ``$value``, starting at integer offset ``$start_index``."
resource: "https://www.php.net/manual/en/function.array-fill.php"
tags: ["native function", "array"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# array_fill()

``array_fill()`` is a PHP native function which creates an array with ``$count`` times a specified ``$value``, starting at integer offset ``$start_index``. 

Literal values are copied: references are dropped, and the value only is copied. On the other hand, objects are only copied by their reference: the same object occupies all the requested slots, they are not cloned or made distinct in any way.

``array_fill()`` may easily lead to memory exhaustion, given ``$count`` is large enough.

```php
<?php

    $array = [1, 1, 1];
    $array = array_fill(0, 3, 1); 
    
    $array = [-3 => 2, 2, 2];
    $array = array_fill(-3, 3, 2); 
    
    $x = new stdClass();
    $x->i = 1;
    
    $array = array_fill(0, 2, $x);
    $array[1]->i = 3;
    echo $array[0]->i; // also 3 

?>
```

## Documentation
- [https://www.php.net/manual/en/function.array-fill.php](https://www.php.net/manual/en/function.array-fill.php)

## See Also
- [Understanding and Implementing PHP's `array_fill()` Function](https://reintech.io/blog/understanding-implementing-php-array-fill-function)
- [PHP array_fill( ) Function](https://medium.com/@ok4304571/php-array-fill-function-bde394c4b4d8)

## Related
- [range()](/features/range.md)
- [array_pad()](/features/array_pad.md)
- [memory_limit](/features/memory_limit.md)
- [Array, []](/features/array.md)
- [References](/features/reference.md)

