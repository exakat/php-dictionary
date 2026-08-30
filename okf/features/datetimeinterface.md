---
type: "PHP Feature"
title: "DateTimeInterface"
description: "``DateTimeInterface`` is a PHP interface implemented by both ``DateTime`` and ``DateTimeImmutable``."
resource: "https://www.php.net/manual/en/class.datetimeinterface.php"
tags: ["native class", "interface", "date"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# DateTimeInterface

``DateTimeInterface`` is a PHP interface implemented by both ``DateTime`` and ``DateTimeImmutable``. It defines the common API shared by both mutable and immutable date-time objects.

Using ``DateTimeInterface`` as a type in function signatures accepts either class, making code agnostic to mutability. It cannot be implemented by user-defined classes directly; it exists solely to type both built-in date-time classes.

``DateTimeInterface`` exposes methods such as ``format()``, ``getTimestamp()``, ``getTimezone()``, and ``diff()``.

```php
<?php

    function formatDate(DateTimeInterface $date): string {
        return $date->format('Y-m-d');
    }
    
    // both classes satisfy the type
    echo formatDate(new DateTime('2024-01-15'));
    echo formatDate(new DateTimeImmutable('2024-06-03'));

?>
```

## Documentation
- [https://www.php.net/manual/en/class.datetimeinterface.php](https://www.php.net/manual/en/class.datetimeinterface.php)

## See Also
- [For a Great Time, Make it a DateTime](https://stevegrunwell.com/blog/php-datetime/)
- [DateTimeImmutable](https://derickrethans.nl/immutable-datetime.html)

## Related
- [DateTime](/features/datetime.md)
- [Interface](/features/interface.md)
- [Dates](/features/date.md)
- [DateInterval](/features/dateinterval.md)
- [PHP Native Interfaces](/features/php-interface.md)

## Details
- PHP since: 5.5
- Extension: ext-date

