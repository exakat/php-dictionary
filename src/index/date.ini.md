# Dates
These functions allow to get the date and time from the server where the application is running. These functions format the date and time in many different ways.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/date.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/date.ini.html","name":"Dates","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"These functions allow to get the date and time from the server where the application is running","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Dates.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $dt = new DateTimeImmutable('2015-11-01 00:00:00', new DateTimeZone('America/New_York'));
    echo 'Start: ', $dt->format('Y-m-d H:i:s P'), PHP_EOL;
    $dt = $dt->add(new DateInterval('PT3H'));
    echo 'End:   ', $dt->format('Y-m-d H:i:s P'), PHP_EOL;

?>
```

**[Documentation](https://www.php.net/datetime)**
## See Also

+ [Dates and periods in PHP](https://dev.to/xwero/dates-and-periods-in-php-46o1)
+ [PHP Date and Time Recipes](https://css-tricks.com/php-date-and-time-recipes/)

## Related

+ [Datetime Trap](datetime-trap.ini.html)
+ [DateTime](datetime.ini.html)
+ [DateTimeInterface](datetimeinterface.ini.html)
