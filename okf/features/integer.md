---
type: "PHP Feature"
title: "integer"
description: "An integer, or ``int`` is a number of the set ℤ = ``{..., -2, -1, 0, 1, 2, ...}``."
resource: "https://www.php.net/manual/en/language.types.integer.php"
tags: ["scalar", "integer", "data structure"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# integer

An integer, or ``int`` is a number of the set ℤ = ``{..., -2, -1, 0, 1, 2, ...}``. It is limited by ``PHP_INT_MIN``, the lower bound, and ``PHP_INT_MAX``, the upper bound. 

Integers have several syntaxes: they may be written in binary, octal, decimal, hexadecimal and with ``_`` as a separator.

```php
<?php

    $a = 1234;       // decimal number
    $a = 0123;       // octal number (equivalent to 83 decimal)
    $a = 0o123;      // octal number (as of PHP 8.1.0)
    $a = 0x1A;       // hexadecimal number (equivalent to 26 decimal)
    $a = 0b11111111; // binary number (equivalent to 255 decimal)
    $a = 1_234_567;  // decimal number (as of PHP 7.4.0)

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.integer.php](https://www.php.net/manual/en/language.types.integer.php)

## See Also
- [PHP Integers](https://www.tutorialkart.com/php/php-integer/)

## Related
- [Addition](/features/addition.md)
- [Binary Integer](/features/binary-integer.md)
- [Multiplication](/features/multiplication.md)
- [Numeric Separator](/features/numeric-separator.md)
- [Octal Integer](/features/octal-integer.md)
- [Scalar Types](/features/scalar-type.md)
- [Sign](/features/sign.md)
- [PHP_INT_MAX](/features/php_int_max.md)
- [PHP_INT_MIN](/features/php_int_min.md)
- [Positive Integer](/features/positive-integer.md)
- [precision](/features/precision.md)
- [abs()](/features/abs.md)
- [Number](/features/number.md)
- [Numeric Base](/features/numeric-base.md)
- [Rounding](/features/rounding.md)
- [Leading Zero Means Octal](/features/leading-zero-means-octal.md)
- [Math](/features/math.md)

