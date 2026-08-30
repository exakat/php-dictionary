---
type: "PHP Feature"
title: "Rounding"
description: "Rounding refers to the process of adjusting numerical values to a certain degree of precision."
resource: "https://www.php.net/manual/en/function.round.php"
tags: ["math", "integer"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Rounding

Rounding refers to the process of adjusting numerical values to a certain degree of precision. Most often, it means turning a float number into an integer, although there are rounding in various scales: rounding floats to 2 digits after the decimal separator; rounding to the nearest power of 10; rounding to the next unit, like Mb. 

Rounding has several techniques: that needs to be consistent across applications: rounding to the next integer; to the previous integer; truncating; rounding to the nearest even number; flooring or ceiling; etc.

```php
<?php

$pi = M_PI;

print round($pi, 0); // 3

?>
```

## Documentation
- [https://www.php.net/manual/en/function.round.php](https://www.php.net/manual/en/function.round.php)

## See Also
- [Up and Down Round values in PHP: ceil, floor and round functions: The ultimate tutorial 2024](https://nestify.io/blog/up-down-round-values-in-php-ceil-floor-functions/)

## Related
- [Math](/features/math.md)
- [integer](/features/integer.md)
- [Real Numbers](/features/real.md)

