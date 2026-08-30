---
type: "PHP Feature"
title: "Binary Operator"
description: "A binary operator is an operator that operates on a two operands."
resource: "https://en.wikipedia.org/wiki/Binary_operation"
tags: ["feature", "operator"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Binary Operator

A binary operator is an operator that operates on a two operands. It performs an operation based on the value of both operand. PHP supports several binary operators, including the following:

+ Assignation operator ``=``
+ Equality operator ``==``
+ Difference operator ``!-`` and ``<>``
+ Identity operator ``===``
+ Non-identity operator ``!==``
+ Math operators, such as addition ``+``, substraction ``-``, multiplication ``*``, division ``/``, power ``**``, modulo ``%``
+ Comparison operators, such as greater than ``>``, greater or equal than ``>=``, lesser than ``<``, lesser or equal than ``<=``
+ Concatenation, with the dot operator ``.``
+ Spaceship operator, ``<=>``
+ All the short operators, that combines a binary operation with an assignation: for example, add and assign ``+=``

And many others.

```php
<?php

    $a = 1;
    $a +=2;
    var_dump($a === 3); // true

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Binary_operation](https://en.wikipedia.org/wiki/Binary_operation)

## See Also
- [Mastering binary and bitwise in PHP](https://thephp.website/en/issue/bitwise-php/)

## Related
- [Unary Operator](/features/unary.md)
- [Ternary Operator](/features/ternary.md)
- [Binary](/features/binary.md)

