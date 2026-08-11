# Days In Month
Days in month is a classic bug when dealing with dates. It happens when adding a month to a date and ending up two months later. 

This happens when adding a month to the last day of a month, while this month is longer than the next. For example, ``January 31st``, or ``Halloween October 31st``. After adding a month, PHP calculates it as the ``November 31st``, which doesn't exists. Yet, PHP converts it to ``December 1st``.

When dealing with months, it is recommended to use expressions like 'first day of this month', or 'next month', instead of adding a month to an existing date.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/days-in-month.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/days-in-month.html","name":"Days In Month","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:54:37 +0000","dateModified":"Thu, 06 Aug 2026 05:54:37 +0000","description":"Days in month is a classic bug when dealing with dates","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Days In Month.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"days-in-month"}]}]}</script>
```php
<?php

    echo date('d-m-Y', strtotime('+1 months', strtotime('31 October 2000')));

    echo (new DateTime('first day of this month'))->format('jS, F Y');

    echo (new DateTime('next month'))->format('jS, F Y');

?>
```

**[Documentation](https://derickrethans.nl/obtaining-the-next-month-in-php.html)**
## See Also

+ [How to Get Number of Days in Current Month in PHP?](https://www.geeksforgeeks.org/how-to-get-number-of-days-in-current-month-in-php/)
+ [The Silent Bug That Corrupts Your Monthly Data in Laravel](https://medium.com/@segunibidokun/the-silent-bug-that-corrupts-your-monthly-data-in-laravel-b464706ada54)

## Related

+ [Days Are Not 86400 Seconds](day-in-seconds.html)
+ [Datetime Trap](datetime-trap.html)

## Related packages

+ [nesbot/carbon](https://packagist.org/packages/nesbot/carbon)
+ [cakephp/chronos](https://packagist.org/packages/cakephp/chronos)
