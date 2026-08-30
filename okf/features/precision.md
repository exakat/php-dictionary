---
type: "concept"
title: "precision"
description: "Precision refers to the number of digits that are used to represent and display floating-point numbers."
resource: "https://www.php.net/manual/en/language.types.float.php"
tags: ["concept", "decimal", "directive"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# precision

Precision refers to the number of digits that are used to represent and display floating-point numbers. The exact meaning depends a bit on the context, but it's most commonly about float accuracy and formatting.

Precision is important when using a decimal number as an array index: the conversion is implicit, and, nowadays, it yields a warning.

Precision is also lost when an integer is converted to a decimal number, which may not be accurately represented. This happens with large integers, when they are converted to float, because of their size.

``precision`` and ``serialize_precision`` are two PHP directives that control the display or conversion of numbers.

```php
<<?php

    echo 1 / 7;
    
    print PHP_EOL;
    
    ini_set('precision', 2);
    
    echo 1 / 7;

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.float.php](https://www.php.net/manual/en/language.types.float.php)

## See Also
- [The Floating-Point Guide](https://floating-point-gui.de/)

## Related
- [integer](/features/integer.md)
- [Floating Point Numbers](/features/float.md)
- [PHP_INT_MAX](/features/php_int_max.md)
- [PHP_INT_MIN](/features/php_int_min.md)
- [serialize_precision](/features/serialize_precision.md)

