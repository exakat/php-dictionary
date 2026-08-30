---
type: "PHP Feature"
title: "DateInterval"
description: "``DateInterval`` is a class for the representation of period of time, or stretch of time."
resource: "https://www.php.net/manual/en/class.dateinterval.php"
tags: ["native class", "date"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# DateInterval

``DateInterval`` is a class for the representation of period of time, or stretch of time. It may be added to ``DateTimeImmutable`` and ``DateTime`` objects. It is only created as a time duration.

```php
<?php

    // Create a specific date
    $someDate = \DateTime::createFromFormat('Y-m-d H:i', '2022-08-25 14:18');
    
    // Create interval
    $interval = new \DateInterval('P7D');
    
    // Add interval
    $someDate->add($interval);
    
    // Convert interval to string
    echo $interval->format('%d');

?>
```

## Documentation
- [https://www.php.net/manual/en/class.dateinterval.php](https://www.php.net/manual/en/class.dateinterval.php)

## See Also
- [PHP: Dominate dates with intervals and periods](https://darkghosthunter.medium.com/php-dominate-dates-with-intervals-and-periods-7e66351e6ce2)

## Related
- [DateTime](/features/datetime.md)
- [Datetime Trap](/features/datetime-trap.md)
- [Calendar](/features/calendar.md)
- [Clock](/features/clock.md)
- [DateTimeInterface](/features/datetimeinterface.md)

## Details
- Packagist: [league/period](https://packagist.org/packages/league/period)
- Extension: ext-date

