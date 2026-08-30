---
type: "extension"
title: "Calendar"
description: "The calendar extension provides functions to convert dates between different calendars, such as Gregorian, Julian Day Count, Unix Timestamp, French Revolutionary, Jewish, and others."
resource: "https://www.php.net/manual/en/book.calendar.php"
tags: ["extension", "date"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Calendar

The calendar extension provides functions to convert dates between different calendars, such as Gregorian, Julian Day Count, Unix Timestamp, French Revolutionary, Jewish, and others.

```php
<?php

    $julian_date = gregoriantojd($m, $d, $y);
    $french = jdtofrench($julian_date);
    
    echo $french;
    
?>
```

## Documentation
- [https://www.php.net/manual/en/book.calendar.php](https://www.php.net/manual/en/book.calendar.php)

## See Also
- [Event Calendar with PHP](https://codeshack.io/event-calendar-php/)

## Related
- [DateTime](/features/datetime.md)
- [DateInterval](/features/dateinterval.md)

