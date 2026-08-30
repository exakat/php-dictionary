---
type: "exception"
title: "DivisionByZeroError"
description: "The ``DivisionByZeroError`` exception is thrown when an attempt is made to divide a number by zero."
resource: "https://www.php.net/manual/en/class.divisionbyzeroerror.php"
tags: ["exception", "maths", "native exception"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# DivisionByZeroError

The ``DivisionByZeroError`` exception is thrown when an attempt is made to divide a number by zero. It is never possible to divide by zero, the result is undefined. It is true for all zeroes: ``0``, ``+0``, ``-0``.

```php
<?php

    try {
        echo 1 / $a;
    } catch(DivisionByZeroError $e){
        echo 'Trying to divide by 0';
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/class.divisionbyzeroerror.php](https://www.php.net/manual/en/class.divisionbyzeroerror.php)

## See Also
- [PHP: intdiv()](https://www.php.net/manual/en/function.intdiv.php)
- [Arithmetic operators](https://www.php.net/manual/en/language.operators.arithmetic.php)

## Related
- [Error](/features/error.md)
- [ArithmeticError Error](/features/arithmeticerror.md)
- [Division](/features/division.md)
- [zero](/features/zero.md)

