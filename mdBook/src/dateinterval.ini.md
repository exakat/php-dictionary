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

## See Also

+ [PHP: Dominate dates with intervals and periods](https://darkghosthunter.medium.com/php-dominate-dates-with-intervals-and-periods-7e66351e6ce2)

Related : [DateTime](DateTime), [DateTime](DateTime), [Datetime Trap](Datetime Trap), [Calendar](Calendar), [Clock](Clock), [DateTimeInterface](DateTimeInterface)
