---
type: "PHP Feature"
title: "Absolute Value"
description: "An ``absolute`` value is the positive value of a real number."
resource: "https://www.php.net/abs"
tags: ["math"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Absolute Value

An ``absolute`` value is the positive value of a real number.

PHP offers the native function ``abs()`` to calculate this value.

The absolute value of ``PHP_INT_MIN`` is a float.

```php
<?php

    $a = 10;
    echo abs($a); // 10
    
    $b = -12;
    echo abs($b); // 12

?>
```

## Documentation
- [https://www.php.net/abs](https://www.php.net/abs)

## See Also
- [Absolute value - Wikipedia](https://en.wikipedia.org/wiki/Absolute_value)
- [PHP abs Function: How to Get Absolute Values](https://flatcoding.com/tutorials/php/php-abs-function-how-to-get-absolute-values/)

## Related
- [Fully Qualified Name](/features/fully-qualified-name.md)
- [Absolute](/features/absolute.md)
- [PHP_INT_MIN](/features/php_int_min.md)
- [PHP_INT_MAX](/features/php_int_max.md)

## Details
- Extension: ext-math

