---
type: "concept"
title: "Monotonic"
description: "A monotonic value only ever moves in one direction: it is either always non-decreasing or always non-increasing, and it never goes backward."
resource: "https://en.wikipedia.org/wiki/Monotonic_function"
tags: ["concept", "time"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Monotonic

A monotonic value only ever moves in one direction: it is either always non-decreasing or always non-increasing, and it never goes backward.

Applied to time, a monotonic clock is a time source that cannot jump backward or forward because of NTP synchronization, manual clock changes, or Daylight Saving Time. PHP exposes such a clock through ``hrtime()``, unlike ``microtime()`` or ``time()``, which read the wall clock and can be affected by these adjustments. Measuring an elapsed duration should always rely on a monotonic source, otherwise the computed duration could turn out negative.

Applied to identifiers or sequences, monotonic means each new value is guaranteed to be greater than the previous one, a property required by auto-increment database columns, ULIDs, and Snowflake-style distributed IDs.

```php
<?php

    $timeStart = hrtime(true);

    // some work happens here, even if the system clock is adjusted
    usleep(100);

    $timeEnd = hrtime(true);

    // always positive, thanks to the monotonic clock
    $elapsedNanoseconds = $timeEnd - $timeStart;

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Monotonic_function](https://en.wikipedia.org/wiki/Monotonic_function)

## See Also
- [High-Resolution Monotonic Timer](https://thephp.cc/articles/high-resolution-monotonic-timer)
- [Getting the monotonic time](https://drops-of-php.hi-folks.dev/01-system/13-sys-hrtime/)

## Related
- [hrtime()](/features/hrtime.md)
- [Clock](/features/clock.md)
- [microtime()](/features/microtime.md)
- [Determinism](/features/determinism.md)

