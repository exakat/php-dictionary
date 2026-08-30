---
type: "concept"
title: "Real Numbers"
description: "Real numbers are represented using the ``float`` data type."
resource: "https://www.php.net/manual/en/language.types.float.php"
tags: ["concept", "type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Real Numbers

Real numbers are represented using the ``float`` data type. 

They are also commonly referred to as ``floating-point numbers`` or ``double-precision numbers``. Floats are used to represent decimal numbers, including both whole numbers and fractions, with a certain degree of precision. Real numbers are used for performing mathematical calculations that require decimal accuracy.

There used to be ``real`` dedicated structures, like ``is_real()`` or ``(real)``, though, they were removed in version 7.0. In case of doubt, refer to ``float``. 

It's important to be aware of potential rounding errors or precision issues when working with real numbers. It is true in any programming language that uses floating-point representation. If exact decimal precision, it is recommended to use specialized libraries or techniques to handle arbitrary precision arithmetic, such as ``bcmath`` or ``gmp``.

```php
<?php

    $a = 1.234; 

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.float.php](https://www.php.net/manual/en/language.types.float.php)

## See Also
- [How To Work with Numbers in PHP](https://www.digitalocean.com/community/tutorials/how-to-work-with-numbers-in-php)

## Related
- [Floating Point Numbers](/features/float.md)
- [Bcmath](/features/bcmath.md)
- [GNU Multiple Precision (GMP)](/features/gmp.md)
- [Rounding](/features/rounding.md)

