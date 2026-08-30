---
type: "PHP Feature"
title: "abs()"
description: "``abs()`` calculates the absolute value of a number."
resource: "https://en.wikipedia.org/wiki/Absolute_value"
tags: ["php function", "dependent type", "math"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# abs()

``abs()`` calculates the absolute value of a number. It is the value itself, when the number is positive or zero, and it is the opposite of the number when the number is negative.

Almost all integers have an absolute value: the only exception is ``PHP_INT_MIN``. Its value is ``-9223372036854775808``, and the actual absolute value would be ``9223372036854775808``, which is bigger than ``PHP_INT_MAX``. 

``abs()`` takes ``float`` and ``int`` as types. Except for the exception above, giving a float to ``abs()`` produces a float, and giving it an integer, produces an integer. Other types are forbidden. Objects have to be turned explicitly into a number.

```php
<?php

    $a = -2;
    print abs($a); // 2
    print abs(abs($a)); // 2

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Absolute_value](https://en.wikipedia.org/wiki/Absolute_value)

## See Also
- [PHP: abs - Manual](https://www.php.net/manual/en/function.abs.php)
- [PHP abs() Function - GeeksforGeeks](https://www.geeksforgeeks.org/php/php-abs-function/)

## Related
- [Floating Point Numbers](/features/float.md)
- [integer](/features/integer.md)
- [Number](/features/number.md)
- [Absolute](/features/absolute.md)

