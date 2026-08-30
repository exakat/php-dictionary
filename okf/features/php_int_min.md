---
type: "PHP Feature"
title: "PHP_INT_MIN"
description: "``PHP_INT_MIN`` is the smallest integer that can be processed by PHP."
resource: "https://www.php.net/manual/en/reserved.constants.php"
tags: ["native constant"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# PHP_INT_MIN

``PHP_INT_MIN`` is the smallest integer that can be processed by PHP. 

Nowadays, ``PHP_INT_MIN`` is often -9223372036854775808. This value depends on the underlying machine: in particular, 64 bits, machine and OS, have larger absolute values of ``PHP_INT_MIN``, while 32 bits have smaller. The hardware and the software have to be compatible to provide a larger absolute value of ``PHP_INT_MIN``.

Beyond ``PHP_INT_MIN``, integers are often converted to floats, and loose precision. 

There is also ``PHP_INT_MAX``, which is the positive version of ``PHP_INT_MIN``, minus one.

```php
<?php

$max = PHP_INT_MIN;

var_dump(is_int($max)); // true

?>
```

## Documentation
- [https://www.php.net/manual/en/reserved.constants.php](https://www.php.net/manual/en/reserved.constants.php)

## See Also
- [PHP Integers Guide: Types, Limits, and Conversions](https://flatcoding.com/tutorials/php/php-int/)

## Related
- [integer](/features/integer.md)
- [Floating Point Numbers](/features/float.md)
- [PHP_INT_MAX](/features/php_int_max.md)
- [precision](/features/precision.md)

