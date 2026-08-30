---
type: "PHP Feature"
title: "Associative Array"
description: "An associative array, also called a hash array, is an array whose keys are strings; there may also be integer index, mixed with the string ones."
resource: "https://www.php.net/manual/en/language.types.array.php"
tags: ["array"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Associative Array

An associative array, also called a hash array, is an array whose keys are strings; there may also be integer index, mixed with the string ones. 

In the evolution of PHP, associative arrays evolved into objects, where the index in the array turned into property names.

It is possible to use types others than integer and string with an array syntax: this requires building an object for that. This is the case of ``Iterator`` and ``Weakmap``.

```php
<?php

    $associative = ['a' => 1, 'b' => 4, 3 => 5, 6 ];

    echo $associative['a'];

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.array.php](https://www.php.net/manual/en/language.types.array.php)

## See Also
- [Associative Arrays in PHP](https://blog.newtum.com/associative-array-in-php/)
- [Arrays in PHP: Indexed, Associative, Multidimensional Arrays, and Array Functions](https://developers-heaven.net/blog/arrays-in-php-indexed-associative-multidimensional-arrays-and-array-functions/)

## Related
- [Indexed Array](/features/indexed-array.md)
- [Array, []](/features/array.md)
- [Collection](/features/collection.md)
- [Dictionary](/features/dictionary.md)
- [Index](/features/index.md)
- [ArrayAccess](/features/arrayaccess.md)
- [Pair](/features/pair.md)
- [Iterator](/features/iterator.md)
- [Weakmap](/features/weakmap.md)

