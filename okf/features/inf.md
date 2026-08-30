---
type: "PHP Feature"
title: "INF"
description: "Infinite is a PHP constant, called ``INF``."
resource: "https://www.php.net/manual/en/math.constants.php"
tags: ["number", "native constant"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# INF

Infinite is a PHP constant, called ``INF``. It is also possible to generate such a value, with calls to math functions such as ``log(0)`` or ``1e308 * 2``.

While the infinite is a float, it is possible to test a number with ``is_infinite()``.

```php
<?php

$infinite = 1e308 * 2;

var_dump(is_infinite($infinite)); // true 

var_dump(INF === $infinite);      // true 

echo str_repeat('1', 1000) + 0;  // INF

?>
```

## Documentation
- [https://www.php.net/manual/en/math.constants.php](https://www.php.net/manual/en/math.constants.php)

## See Also
- [is_infinite](https://www.php.net/manual/en/function.is-infinite.php)

## Related
- [Infinite](/features/infinite.md)
- [ArithmeticError Error](/features/arithmeticerror.md)
- [E](/features/e.md)
- [Infinite Loop](/features/infinite-loop.md)
- [Non-numeric](/features/non-numeric.md)
- [Math](/features/math.md)

## Details
- Extension: ext-math

