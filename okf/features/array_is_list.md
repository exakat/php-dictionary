---
type: "PHP Feature"
title: "array_is_list()"
description: "``array_is_list()`` is a native PHP function that checks if the given array is a list."
resource: "https://www.php.net/manual/en/function.array-is-list.php"
tags: ["native function", "array"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# array_is_list()

``array_is_list()`` is a native PHP function that checks if the given array is a list.

An array is considered a list if its keys are sequential integers starting from 0. Associative arrays or arrays with gaps, non-integer or out of sequence keys are not considered lists. This function was introduced in version 8.1 to help distinguish between sequential and associative arrays, which is useful when working with functions like ``json_encode()`` that treat lists as JSON arrays and associative arrays as JSON objects.

```php
<?php

    $list = [1, 2, 3];
    var_dump(array_is_list($list)); // true
    
    $assoc = ['a' => 1, 'b' => 2];
    var_dump(array_is_list($assoc)); // false
    
    $empty = [];
    var_dump(array_is_list($empty)); // true
    
    $gapped = [0 => 'a', 2 => 'c'];
    var_dump(array_is_list($gapped)); // false

?>
```

## Documentation
- [https://www.php.net/manual/en/function.array-is-list.php](https://www.php.net/manual/en/function.array-is-list.php)

## See Also
- [How to Encode an Array in JSON with PHP (Production-Ready Guide)](https://thelinuxcode.com/how-to-encode-an-array-in-json-with-php-production-ready-guide/)

## Related
- [is_array()](/features/is_array.md)
- [json_encode()](/features/json_encode.md)
- [count()](/features/count.md)
- [array_keys()](/features/array_keys.md)

## Details
- PHP since: 8.1

