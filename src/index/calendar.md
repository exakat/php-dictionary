# Calendar
The calendar extension provides functions to convert dates between different calendars, such as Gregorian, Julian Day Count, Unixtimestamp, French Revolutionary, Jewish, and others.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/calendar.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/calendar.html","name":"Calendar","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The calendar extension provides functions to convert dates between different calendars, such as Gregorian, Julian Day Count, Unixtimestamp, French Revolutionary, Jewish, and others","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Calendar.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $julian_date = gregoriantojd($m, $d, $y);
    $french = jdtofrench($julian_date);
    
    echo $french;
    
?>
```

**[Documentation](https://www.php.net/manual/en/book.calendar.php)**
## See Also

+ [Event Calendar with PHP](https://codeshack.io/event-calendar-php/)

## Related

+ [DateTime](datetime.ini.html)
+ [DateInterval](dateinterval.ini.html)
