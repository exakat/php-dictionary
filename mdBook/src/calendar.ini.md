# Calendar
The calendar extension provides functions to convert dates between different calendars, such as Gregorian, Julian Day Count, Unixtimestamp, French Revolutionary, Jewish, and others.
```php
<?php

    $julian_date = gregoriantojd($m, $d, $y);
    $french = jdtofrench($julian_date);
    
    echo $french;
    
?>
```

## See Also

+ [Event Calendar with PHP](https://codeshack.io/event-calendar-php/)

Related : [DateTime](DateTime), [DateInterval](DateInterval)
