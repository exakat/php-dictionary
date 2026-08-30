---
type: "PHP Feature"
title: "Array Syntax"
description: "The array syntax, or array notation, is the usage of square brackets after a data container, such as variables or properties, or a literal, to access an element."
resource: "https://www.php.net/manual/en/language.types.array.php"
tags: ["syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Array Syntax

The array syntax, or array notation, is the usage of square brackets after a data container, such as variables or properties, or a literal, to access an element. It is generally known to be used with array structures, though it may also be used with strings and objects.

```php
<?php

    $array = ['a', 'b', 'c'];
    echo $array[1]; // b
    
    $string = 'ABC';
    echo $string[2]; // C
    
    $object = new ArrayObject(['x', 'y', 'z']);
    print $object[0]; // x

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.array.php](https://www.php.net/manual/en/language.types.array.php)

## See Also
- [Introduction to PHP short array syntax | BeFused](https://befused.com/php/short-array/)
- [Request for Comments: Short syntax for arrays](https://wiki.php.net/rfc/shortsyntaxforarrays)

## Related
- [Object Syntax](/features/object-syntax.md)
- [resource](/features/resource.md)
- [ArrayObject](/features/arrayobject.md)
- [Array Dot Notation](/features/array-dot-notation.md)

