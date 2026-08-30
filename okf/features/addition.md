---
type: "PHP Feature"
title: "Addition"
description: "PHP additions apply to two different types: numbers and arrays."
resource: "https://www.php.net/manual/en/language.operators.arithmetic.php"
tags: ["math"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Addition

PHP additions apply to two different types: numbers and arrays.

For numbers, ``int`` and ``float``, this is the classic mathematical addition. 

For arrays, this is a special version of array merge: the arrays are merged, and keys are kept once they are written. This features only exists for addition and arrays. Substraction is not available.

With boolean, addition first cast the boolean to an integer, 0 or 1, and then, operates as a math addition.

With string, addition first try to convert the string to a numeric value. If it succeed, it operates as a math addition. Otherwise, it emits a type error.

With objects or resources, a type error is emitted.

```php
<?php

$a = 1 + 2.3; // 3.3

$a2 = 1 + -2.3; // -1.3

$b = [1] + [3, 4]; // [1, 4]

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.arithmetic.php](https://www.php.net/manual/en/language.operators.arithmetic.php)

## See Also
- [Array operators](https://www.php.net/manual/en/language.operators.array.php)
- [Combining arrays using + versus array_merge in PHP](https://www.texelate.co.uk/blog/combining-arrays-using-plus-versus-array-merge-in-php)

## Related
- [Array, []](/features/array.md)
- [integer](/features/integer.md)
- [Floating Point Numbers](/features/float.md)
- [TypeError](/features/typeerror.md)
- [Division](/features/division.md)
- [Operand](/features/operand.md)
- [Plus +](/features/plus.md)
- [Single](/features/single.md)

