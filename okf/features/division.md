---
type: "character"
title: "Division"
description: "Division is the mathematical division."
resource: "https://www.php.net/manual/en/language.operators.arithmetic.php"
tags: ["math", "character"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Division

Division is the mathematical division. It applies to numbers: integers and float. 

It also works with booleans and null, which are converted to integers. Other types are not allowed for division and yield a fatal error. 

Division may be resulting in an integer or a float, whatever the type of the initial operands. PHP produces integers whenever possible.

Division by zero, or by any value that is cast to 0, leads to a ``DivisionByZeroError``.

The operator for division is the slash ``/``. The backslash ``\`` is used for namespaces. 

There is a function for the integer division: ``intdiv()``; and ``%`` for the modulo operator, aka the remaining.

```php
<?php

$a = 10 / 2.5; // 4.0

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.arithmetic.php](https://www.php.net/manual/en/language.operators.arithmetic.php)

## See Also
- [Array operators](https://www.php.net/manual/en/language.operators.array.php)
- [Combining arrays using + versus array_merge in PHP](https://www.texelate.co.uk/blog/combining-arrays-using-plus-versus-array-merge-in-php)

## Related
- [Addition](/features/addition.md)
- [Exponent](/features/exponent.md)
- [Multiplication](/features/multiplication.md)
- [Modulo](/features/modulo.md)
- [DivisionByZeroError](/features/divisionbyzeroerror.md)
- [intdiv()](/features/intdiv.md)

