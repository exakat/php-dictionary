---
type: "classic bug"
title: "Days Are Not 86400 Seconds"
description: "Days in seconds is a classic bug when dealing with dates."
resource: "https://medium.com/@dotcom.software/a-day-is-not-86400-seconds-51d95848b622"
tags: ["classic bug"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Days Are Not 86400 Seconds

Days in seconds is a classic bug when dealing with dates. It happens when adding 86400 seconds to a time to get the same time on the next day. 

The bug will happen most commonly twice a year, at the change of time from winter to summer time. Those days are one hour longer or shorter and lead to calculating the wrong time on the next day. 

This bug may also have an impact when the internal clock of the server is updated, or when extra leap seconds are added, on ``December 31st`` or ``June 30th``. It depends on the years.

When dealing with days, it is recommended to use an interval, or use a relative expression like ``'tomorrow'``.

```php
<?php

    $tomorrow = new DateTime('tomorrow');
    $secondsLeft = $tomorrow->getTimestamp() - time();
    echo $secondsLeft;

?>
```

## Documentation
- [https://medium.com/@dotcom.software/a-day-is-not-86400-seconds-51d95848b622](https://medium.com/@dotcom.software/a-day-is-not-86400-seconds-51d95848b622)

## See Also
- [Adding 86400 seconds to Oct. 25 1998 gives wrong answer](https://bugs.php.net/bug.php?id=741)

## Related
- [Days In Month](/features/days-in-month.md)
- [DateTime](/features/datetime.md)

