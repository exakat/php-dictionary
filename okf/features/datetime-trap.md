---
type: "classic bug"
title: "Datetime Trap"
description: "When using ``Datetime`` objects, be aware that methods that return the modified date are actually returning the object itself."
resource: "https://www.php.net/datetime"
tags: ["classic bug", "date"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Datetime Trap

When using ``Datetime`` objects, be aware that methods that return the modified date are actually returning the object itself. This means that calculating a difference with ``diff()``, ``add()``, ``modify()`` methods also changes the underlying object. 

This trap is also set in packages that are built on top of ``Datetime``.

To avoid this trap, use the ``DatetimeImmutable`` class. This class is not modified by those methods, but returns a new object every time.

```php
<?php

    $today = new Datetime('now');
    print $today->format('d-m-Y').PHP_EOL;
    // for example, 24-11-2026
    
    $tomorrow = $today->add(new DateInterval('P1D'));
    print $tomorrow->format('d-m-Y').PHP_EOL;
    // 25-11-2026 (as expected)
    
    $twoDaysLater = $today->add(new DateInterval('P2D'));
    print $twoDaysLater->format('d-m-Y');
    // 27-11-2026 (one day overshoot!)

?>
```

## Documentation
- [https://www.php.net/datetime](https://www.php.net/datetime)

## See Also
- [I just fell into the Date Trap in PHP](https://twitter.com/CodeWithKyrian/status/1727832972303143151)
- [PHP DateTime difference – it’s a trap!](https://aiocollective.com/blog/php-datetime-difference-trap/)
- [What’s all this “immutable date” stuff, anyway?](https://medium.com/@codebyjeff/whats-all-this-immutable-date-stuff-anyway-72d4130af8ce)

## Related
- [DateTime](/features/datetime.md)
- [DateInterval](/features/dateinterval.md)
- [Dates](/features/date.md)
- [Days In Month](/features/days-in-month.md)

