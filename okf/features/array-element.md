---
type: "PHP Feature"
title: "Array Element"
description: "An array element is a piece of data, stored at an index in the array."
resource: "https://www.php.net/manual/en/function.each.php"
tags: ["array"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Array Element

An array element is a piece of data, stored at an index in the array. 

An array element may be of any type, and it may be also repeated, unlike the array index.

The array element is also called an item. It is often named ``$value``, in a loop, as a blind variable.

When an array is a list, the elements are all of the same type. When an array is a hash, the elements may be of different types.

Array elements are not typed at the language level. They may be typed for static analysis tools, via the phpdoc syntax.

```php
<?php

$array = ['a' => 1, 'b' => 3, 'c' => 5];
while(list($key, $value) = each($array)) {
    print $key . ' => ' . $value . PHP_EOL;
}

?>
```

## Documentation
- [https://www.php.net/manual/en/function.each.php](https://www.php.net/manual/en/function.each.php)

## See Also
- [PHP manual: Arrays](https://www.php.net/manual/en/language.types.array.php)
- [Associative Arrays in PHP: An Overview](https://www.simplilearn.com/tutorials/php-tutorial/associative-array-in-php)

## Related
- [Index For Arrays](/features/index-array.md)
- [each](/features/each.md)
- [Loops](/features/loop.md)
- [Hash](/features/hash.md)
- [Multidimensional Array](/features/multidimensional-array.md)
- [Readable](/features/readable.md)
- [Writable](/features/writable.md)
- [Writeable](/features/writeable.md)

## Details
- PHP since: 1.0
- PHP until: 8.0
- Deprecated: 7.2

