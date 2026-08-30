---
type: "PHP Feature"
title: "Micro-second"
description: "Micro-seconds are one thousandth of a second."
resource: "https://www.php.net/manual/en/function.microtime.php"
tags: ["micro", "time"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Micro-second

Micro-seconds are one thousandth of a second. They are accessible in different ways: 

+ ``Datetime`` and ``DateTimeImmutable`` objects, for dates
+ ``microtime()`` for dates
+ ``hrtime()`` for intervals

Do not use ``date()`` to get micro-seconds, as the function always returns 0.

```php
<?php

$ms = (new Datetime()->format('u'));

$ms = microtime(true);

?>
```

## Documentation
- [https://www.php.net/manual/en/function.microtime.php](https://www.php.net/manual/en/function.microtime.php)

## See Also
- [PHP | microtime() Function](https://www.geeksforgeeks.org/php/php-microtime-function/)
- [A Comprehensive Guide to PHP's time() and microtime() Functions](https://reintech.io/blog/comprehensive-guide-php-time-microtime-functions)

## Related
- [microtime()](/features/microtime.md)
- [hrtime()](/features/hrtime.md)
- [DateTime](/features/datetime.md)

