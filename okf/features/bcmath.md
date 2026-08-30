---
type: "extension"
title: "Bcmath"
description: "For arbitrary precision mathematics, PHP offers ``BCMath``, which supports numbers of any size and precision up to ``2147483647``, or ``0x7FFFFFFF`` decimal digits, if there is sufficient memory, represented as strings."
resource: "https://www.php.net/manual/en/book.bc.php"
tags: ["extension"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Bcmath

For arbitrary precision mathematics, PHP offers ``BCMath``, which supports numbers of any size and precision up to ``2147483647``, or ``0x7FFFFFFF`` decimal digits, if there is sufficient memory, represented as strings.

```php
<?php

    echo bcpow(3, 40);  // 12157665459056928801
    echo 2 ** 40;       // 1.2157665459057E+19 (a float)

?>
```

## Documentation
- [https://www.php.net/manual/en/book.bc.php](https://www.php.net/manual/en/book.bc.php)

## See Also
- [A Comprehensive Guide to the PHP BCMath Library for Arbitrary Precision Arithmetic](https://reintech.io/blog/comprehensive-guide-php-bcmath-library)

## Related
- [GNU Multiple Precision (GMP)](/features/gmp.md)
- [Math](/features/math.md)
- [Real Numbers](/features/real.md)

## Details
- Packagist: [krowinski/bcmath-extended](https://packagist.org/packages/krowinski/bcmath-extended)
- Extension: ext-bcmath

