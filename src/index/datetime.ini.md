# DateTime
``DateTime`` and ``DateTimeImmutable`` is a class for the representation of date and time. It has two variants: ``DateTimeImmutable`` cannot be modified after creation, while ``DateTime`` can. 

Both classes comes with the ``DateTimeInterface``, for typing purposes.

``DateTime`` objects may be created with the constructor, and with several specific methods, such as ``createFromInterface``, ``createFromFormat`` or ``createFromImmutable``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/datetime.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/datetime.ini.html","name":"DateTime","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``DateTime`` and ``DateTimeImmutable`` is a class for the representation of date and time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/DateTime.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $date = new DateTimeImmutable('2024-02-24 11:45 America/Montreal');
    
    $mutable = DateTime::createFromInterface($date);
    
    $date = new DateTime('2014-06-20 11:45 Europe/Amsterdam');

?>
```

**[Documentation](https://www.php.net/manual/en/class.datetime.php)**
## See Also

+ [The DateTime Class](https://www.phparch.com/2022/10/the-php-datetime-class/)
+ [Dates and periods in PHP](https://dev.to/xwero/dates-and-periods-in-php-46o1)
+ [Tokei is a new PHP library dedicated to time-of-day](https://nyamsprod.com/blog/tokei-a-time-handling-library-for-php/)

## Related

+ [Dates](date.ini.html)
+ [Calendar](calendar.ini.html)
+ [DateInterval](dateinterval.ini.html)
+ [Days Are Not 86400 Seconds](day-in-seconds.ini.html)
+ [Micro-second](micro-second.ini.html)
+ [Clock](clock.ini.html)
+ [Datetime Trap](datetime-trap.ini.html)
+ [DateTimeInterface](datetimeinterface.ini.html)

## Related packages

+ [bakame/tokei](https://packagist.org/packages/bakame/tokei)
+ [nesbot/carbon](https://packagist.org/packages/nesbot/carbon)
+ [cakephp/chronos](https://packagist.org/packages/cakephp/chronos)
+ [brick/date-time](https://packagist.org/packages/brick/date-time)
