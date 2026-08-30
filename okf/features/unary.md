---
type: "PHP Feature"
title: "Unary Operator"
description: "A unary operator is an operator that operates on a single operand."
resource: "https://www.php.net/manual/en/language.operators.increment.php"
tags: ["feature", "operator"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Unary Operator

A unary operator is an operator that operates on a single operand. It performs an operation on the value of the operand. PHP supports several unary operators, including the following:

+ Post increment operator ``$a++``
+ Pre increment operator ``++$a``
+ Post decrement operator ``$a--``
+ Pre decrement operator ``--$a``
+ Positive operator ``+$a``, which produces the same value
+ Negative operator ``-$a``, which produces the opposite of the value
+ Logical Not operator ``!$a``
+ Bitwise Not operator ``~$a``
+ Noscream operator ``@$a``

The first four operators change the underlying value and also return the value. The last three operators only return the changed value, leaving the original value unchanged.

```php
<?php

$a = 10;
print -$a;  // -10, $a unchanged
print $a;   // 10
print ++$a; // 10, $a changed
print $a;   // 11

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.increment.php](https://www.php.net/manual/en/language.operators.increment.php)

## See Also
- [Operator Precedence](https://www.php.net/manual/en/language.operators.precedence.php)

## Related
- [Ternary Operator](/features/ternary.md)
- [Binary Operator](/features/binary-operator.md)
- [Operand](/features/operand.md)

