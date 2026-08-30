---
type: "PHP Feature"
title: "DateTime"
description: "``DateTime`` and ``DateTimeImmutable`` is a class for the representation of date and time."
resource: "https://www.php.net/manual/en/class.datetime.php"
tags: ["native class", "date"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# DateTime

``DateTime`` and ``DateTimeImmutable`` is a class for the representation of date and time. It has two variants: ``DateTimeImmutable`` cannot be modified after creation, while ``DateTime`` can. 

Both classes comes with the ``DateTimeInterface``, for typing purposes.

``DateTime`` objects may be created with the constructor, and with several specific methods, such as ``createFromInterface``, ``createFromFormat`` or ``createFromImmutable``.

```php
<?php

    $date = new DateTimeImmutable('2024-02-24 11:45 America/Montreal');
    
    $mutable = DateTime::createFromInterface($date);
    
    $date = new DateTime('2014-06-20 11:45 Europe/Amsterdam');

?>
```

## Documentation
- [https://www.php.net/manual/en/class.datetime.php](https://www.php.net/manual/en/class.datetime.php)

## See Also
- [The DateTime Class](https://www.phparch.com/2022/10/the-php-datetime-class/)
- [Dates and periods in PHP](https://dev.to/xwero/dates-and-periods-in-php-46o1)
- [Tokei is a new PHP library dedicated to time-of-day](https://nyamsprod.com/blog/tokei-a-time-handling-library-for-php/)

## Related
- [Dates](/features/date.md)
- [Calendar](/features/calendar.md)
- [DateInterval](/features/dateinterval.md)
- [Days Are Not 86400 Seconds](/features/day-in-seconds.md)
- [Micro-second](/features/micro-second.md)
- [Clock](/features/clock.md)
- [Datetime Trap](/features/datetime-trap.md)
- [DateTimeInterface](/features/datetimeinterface.md)

## Details
- Packagist: [bakame/tokei](https://packagist.org/packages/bakame/tokei)
- Packagist: [nesbot/carbon](https://packagist.org/packages/nesbot/carbon)
- Packagist: [cakephp/chronos](https://packagist.org/packages/cakephp/chronos)
- Packagist: [brick/date-time](https://packagist.org/packages/brick/date-time)
- Extension: ext-date

