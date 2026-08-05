# DateInterval
``DateInterval`` is a class for the representation of period of time, or stretch of time. It may be added to ``DateTimeImmutable`` and ``DateTime`` objects. It is only created as a time duration. 

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dateinterval.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dateinterval.ini.html","name":"DateInterval","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``DateInterval`` is a class for the representation of period of time, or stretch of time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/DateInterval.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/class.dateinterval.php)**
## See Also

+ [PHP: Dominate dates with intervals and periods](https://darkghosthunter.medium.com/php-dominate-dates-with-intervals-and-periods-7e66351e6ce2)

## Related

+ [DateTime](datetimeimmutable.ini.html)
+ [DateTime](datetime.ini.html)
+ [Datetime Trap](datetime-trap.ini.html)
+ [Calendar](calendar.ini.html)
+ [Clock](clock.ini.html)
+ [DateTimeInterface](datetimeinterface.ini.html)

## Related packages

+ [league/period](https://packagist.org/packages/league/period)
