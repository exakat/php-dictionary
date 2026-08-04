# Dates
These functions allow to get the date and time from the server where the application is running. These functions format the date and time in many different ways.
```php
<?php

    $dt = new DateTimeImmutable('2015-11-01 00:00:00', new DateTimeZone('America/New_York'));
    echo 'Start: ', $dt->format('Y-m-d H:i:s P'), PHP_EOL;
    $dt = $dt->add(new DateInterval('PT3H'));
    echo 'End:   ', $dt->format('Y-m-d H:i:s P'), PHP_EOL;

?>
```

## See Also

+ [Dates and periods in PHP](https://dev.to/xwero/dates-and-periods-in-php-46o1)
+ [PHP Date and Time Recipes](https://css-tricks.com/php-date-and-time-recipes/)

Related : [Datetime Trap](Datetime Trap), [DateTime](DateTime), [DateTimeInterface](DateTimeInterface)
