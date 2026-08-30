---
type: "PHP Feature"
title: "Math"
description: "PHP offers many math features."
resource: "https://www.php.net/manual/en/book.math.php"
tags: ["math"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Math

PHP offers many math features. There are the native math functions, such as ``exp()``, ``cos()`` or ``abs()``; there are operators, such as ``+``, ``*``, ``**``, etc. There are special notions, such as ``NaN``, Not a number, and the constant ``INF``, which represents the infinite.

There are also extension, such as ``bcmath`` and ``gmp``, to handle arbitrary large numbers. 

Finally, there are many packages that provide optimized code to run math specialties, like matrices, complex numbers or statistical tools.

```php
<?php

    $total = 1 + 2 * 3 - 4 ** 5; 

?>
```

## Documentation
- [https://www.php.net/manual/en/book.math.php](https://www.php.net/manual/en/book.math.php)

## See Also
- [Mathematical Operations in PHP](https://www.slingacademy.com/article/mathematical-operations-in-php/)
- [PHP Math: Built-in Functions and Operations](https://codelucky.com/php-math-functions/)

## Related
- [Bcmath](/features/bcmath.md)
- [GNU Multiple Precision (GMP)](/features/gmp.md)
- [Floating Point Numbers](/features/float.md)
- [integer](/features/integer.md)
- [Not A Number (NAN)](/features/nan.md)
- [INF](/features/inf.md)
- [Rounding](/features/rounding.md)

## Details
- Packagist: [brick/math](https://packagist.org/packages/brick/math)
- Packagist: [markbaker/complex](https://packagist.org/packages/markbaker/complex)
- Packagist: [markbaker/matrix](https://packagist.org/packages/markbaker/matrix)
- Packagist: [markrogoyski/math-php](https://packagist.org/packages/markrogoyski/math-php)
- Extension: ext-ext-decimal
- Extension: ext-bcmath
- Extension: ext-gmp

