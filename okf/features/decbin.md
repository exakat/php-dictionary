---
type: "PHP Feature"
title: "decbin()"
description: "``decbin()`` is a PHP native function that converts a decimal integer to its binary string representation."
resource: "https://www.php.net/manual/en/function.decbin.php"
tags: ["native function", "math"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# decbin()

``decbin()`` is a PHP native function that converts a decimal integer to its binary string representation.

``decbin()`` takes a single integer argument and returns a string of ``0`` and ``1`` characters, without any ``0b`` prefix. Negative numbers are converted using the 32-bit or 64-bit two's complement representation, depending on the platform, which produces a long string of ones.

The reverse operation is ``bindec()``, which converts a binary string back to a decimal number. Related functions convert to and from other bases: ``dechex()`` and ``hexdec()`` for hexadecimal, ``decoct()`` and ``octdec()`` for octal. ``base_convert()`` handles arbitrary bases.

```php
<?php

    echo decbin(12);  // 1100
    echo decbin(26);  // 11010
    echo decbin(-1);  // 1111111111111111111111111111111111111111111111111111111111111111 (on 64-bit)

?>
```

## Documentation
- [https://www.php.net/manual/en/function.decbin.php](https://www.php.net/manual/en/function.decbin.php)

## See Also
- [PHP decbin() Function - W3Schools](https://www.w3schools.com/php/func_math_decbin.asp)
- [PHP decbin() Function - GeeksforGeeks](https://www.geeksforgeeks.org/php/php-decbin-function/)

## Related
- [Numeric Base](/features/numeric-base.md)
- [integer](/features/integer.md)

