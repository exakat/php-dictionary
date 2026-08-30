---
type: "type"
title: "Floating Point Numbers"
description: "Floating point numbers, also known as ``floats``, ``doubles``, or ``real numbers``, can be specified using a decimal dot and a mantissa."
resource: "https://www.php.net/manual/en/language.types.float.php"
tags: ["type", "classic bug"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Floating Point Numbers

Floating point numbers, also known as ``floats``, ``doubles``, or ``real numbers``, can be specified using a decimal dot and a mantissa.

They may also use a number separator ``_``: it may be placed anywhere between two digits, to help make the number more readable.

Floats used to be called ``real``, though this was abandoned progressively, since PHP 7.0.

Floats are stored in binary, and most decimal fractions, such as ``0.1``, have no exact binary representation. This makes direct equality comparison a classic bug: ``0.1 + 0.2 === 0.3`` is ``false``, since the actual stored value is ``0.30000000000000004``. To compare floats safely, check that the absolute difference is below a small tolerance, also known as an epsilon, rather than using ``==`` or ``===``.

```php
<?php

    $a = 1.234; 
    $b = 1.2e3; 
    $c = 7E-10;
    $d = 1_234.567; // as of PHP 7.4.0

    var_dump(0.1 + 0.2 === 0.3); // false, classic bug
    var_dump(abs((0.1 + 0.2) - 0.3) < PHP_FLOAT_EPSILON); // true, safe comparison

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.float.php](https://www.php.net/manual/en/language.types.float.php)

## See Also
- [Floating Dangers in PHP](https://medium.com/@dotcom.software/floating-dangers-in-php-c4a2220bd8dc)
- [Floating Point Math](https://0.30000000000000004.com/)
- [Comparing float value in PHP](https://www.geeksforgeeks.org/comparing-float-value-in-php/)

## Related
- [Real Numbers](/features/real.md)
- [Addition](/features/addition.md)
- [Multiplication](/features/multiplication.md)
- [Not A Number (NAN)](/features/nan.md)
- [PHP_INT_MAX](/features/php_int_max.md)
- [PHP_INT_MIN](/features/php_int_min.md)
- [Scalar Types](/features/scalar-type.md)
- [Sign](/features/sign.md)
- [abs()](/features/abs.md)
- [PHP Natives](/features/native-type.md)
- [Numeric Separator](/features/numeric-separator.md)
- [precision](/features/precision.md)
- [Double](/features/double.md)
- [Logarithm](/features/logarithm.md)
- [Non-numeric](/features/non-numeric.md)
- [Number](/features/number.md)
- [Readable](/features/readable.md)
- [E](/features/e.md)
- [Math](/features/math.md)
- [serialize_precision](/features/serialize_precision.md)

