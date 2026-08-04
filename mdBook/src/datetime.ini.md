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

## See Also

+ [The DateTime Class](https://www.phparch.com/2022/10/the-php-datetime-class/)
+ [Dates and periods in PHP](https://dev.to/xwero/dates-and-periods-in-php-46o1)
+ [Tokei is a new PHP library dedicated to time-of-day](https://nyamsprod.com/blog/tokei-a-time-handling-library-for-php/)

Related : [Dates](Dates), [Calendar](Calendar), [DateInterval](DateInterval), [Days Are Not 86400 Seconds](Days Are Not 86400 Seconds), [Micro-second](Micro-second), [Clock](Clock), [Datetime Trap](Datetime Trap), [DateTimeInterface](DateTimeInterface)
