---
type: "PHP Feature"
title: "Binary Integer"
description: "Integers can be specified in binary, or base 2, notation."
resource: "https://www.php.net/manual/en/language.types.integer.php"
tags: ["integer"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Binary Integer

Integers can be specified in binary, or base 2, notation. Binary integer syntax starts with the prefix ``0b`` and only contains 0 and 1.

Binary integers may be specified as positive or negative. Their size may become very long, and yet, eventually, produce an integer. They may have leading ``0``, after the prefix ``0b``.

Binary format exists only at compilation time: at execution time, the integer is in decimal form and has no hint that it was input as a binary number.

Binary numbers are integers until ``PHP_INT_MAX``. Beyond that, they are cast into a decimal number, ``float``, and eventually, are returned as ``INF``.

It is possible to use ``decbin()`` and ``sprintf()``, related functions to produce a string representation in the binary format.

```php
<?php

    // 12
    $binary = 0b1100;
    
    // On a 32bit machine (double the size for 64bits one)
    $binary = 0b1111111111111111111111111111111;

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.integer.php](https://www.php.net/manual/en/language.types.integer.php)

## See Also
- [PHP 8.1: Explicit Octal numeral notation](https://php.watch/versions/8.1/explicit-octal-notation)
- [Binary, Hexadecimal, Octal Functions in PHP](https://tutorialio.com/binary-hexadecimal-octal-functions-in-php/)

## Related
- [decbin()](/features/decbin.md)
- [sprintf](/features/sprintf.md)
- [integer](/features/integer.md)
- [Binary](/features/binary.md)
- [Hexadecimal Integer](/features/hexadecimal-integer.md)
- [Octal Integer](/features/octal-integer.md)

## Details
- PHP since: 5.4

