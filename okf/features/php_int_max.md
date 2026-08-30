---
type: "PHP Feature"
title: "PHP_INT_MAX"
description: "``PHP_INT_MAX`` is the largest integer that can be processed by PHP."
resource: "https://www.php.net/manual/en/reserved.constants.php"
tags: ["native constant"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# PHP_INT_MAX

``PHP_INT_MAX`` is the largest integer that can be processed by PHP. 

Nowadays, ``PHP_INT_MAX`` is often 9223372036854775807. This value depends on the underlying machine: in particular, 64-bit machine and OS have larger values of ``PHP_INT_MAX``, while 32-bit ones have smaller. The hardware and the software have to be compatible to provide a larger value of ``PHP_INT_MAX``.

Beyond ``PHP_INT_MAX``, integers are often converted to floats, and loose precision. 

There is also ``PHP_INT_MIN``, which is the negative version of ``PHP_INT_MAX``, minus one.

```php
<?php

$max = PHP_INT_MAX;

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
- [PHP_INT_MIN](/features/php_int_min.md)
- [precision](/features/precision.md)

