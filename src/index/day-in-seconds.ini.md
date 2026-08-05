# Days Are Not 86400 Seconds
Days in seconds is a classic bug when dealing with dates. It happens when adding 86400 seconds to a time to get the same time on the next day. 

The bug will happen most commonly twice a year, at the change of time from winter to summer time. Those days are one hour longer or shorter and lead to calculating the wrong time on the next day. 

This bug may also have impact when the internal clock of the server is updated, or when extra leap seconds are added, by ``December 31st`` or ``June 30th``. It depends on the years.

When dealing with days, it is recommended to use an interval, or use relative expression like ``'``tomorrow'``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/day-in-seconds.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/day-in-seconds.ini.html","name":"Days Are Not 86400 Seconds","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 08:40:04 +0000","dateModified":"Fri, 17 Jul 2026 08:40:04 +0000","description":"Days in seconds is a classic bug when dealing with dates","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Days Are Not 86400 Seconds.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $tomorrow = new DateTime('tomorrow');
    $secondsLeft = $tomorrow->getTimestamp() - time();
    echo $secondsLeft;

?>
```

**[Documentation](https://medium.com/@dotcom.software/a-day-is-not-86400-seconds-51d95848b622)**
## See Also

+ [Adding 86400 seconds to Oct. 25 1998 gives wrong answer](https://bugs.php.net/bug.php?id=741)

## Related

+ [Days In Month](days-in-month.ini.html)
+ [DateTime](datetime.ini.html)
