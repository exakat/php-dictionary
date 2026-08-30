---
type: "PHP Feature"
title: "Index For Arrays"
description: "A index is the identifier of an specific element in an array."
resource: "https://www.php.net/manual/en/language.types.array.php"
tags: ["array", "data-container"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Index For Arrays

A index is the identifier of an specific element in an array. They may automatically generated, by simply omitting them at creation time. 

PHP index may be integers or strings only. Other data types generate an error or a type conversion. For example, floats are turned into integer. integer-shaped strings will also be turned into integer.

PHP index start at 0. They may be automatically assigned by appending a new value with the ``[]`` operator: then, they use the greatest available index + 1.

```php
<?php

    $array = ['a', 'b', 'c'];

    echo $array[0];

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.array.php](https://www.php.net/manual/en/language.types.array.php)

## See Also
- [PHP: Frankenstein arrays](https://vazaha.blog/en/9/php-frankenstein-arrays)
- [Filtering an array by keys in PHP](https://yellowduck.be/posts/filtering-an-array-by-keys-in-php)

## Related
- [Array, []](/features/array.md)
- [Data Container](/features/data-container.md)
- [Collection](/features/collection.md)
- [Index](/features/index.md)
- [Map](/features/map.md)
- [Negative Index](/features/negative-index.md)
- [Square Brackets](/features/square-bracket.md)
- [Array Element](/features/array-element.md)
- [array_keys()](/features/array_keys.md)
- [Automatic Index](/features/automatic-index.md)
- [unset()](/features/unset.md)
- [Array Dot Notation](/features/array-dot-notation.md)
- [array_column](/features/array_column.md)
- [array_push()](/features/array_push.md)
- [Offset](/features/offset.md)
- [Multidimensional Array](/features/multidimensional-array.md)

