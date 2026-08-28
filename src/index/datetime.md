# DateTime
``DateTime`` and ``DateTimeImmutable`` is a class for the representation of date and time. It has two variants: ``DateTimeImmutable`` cannot be modified after creation, while ``DateTime`` can. 

Both classes comes with the ``DateTimeInterface``, for typing purposes.

``DateTime`` objects may be created with the constructor, and with several specific methods, such as ``createFromInterface``, ``createFromFormat`` or ``createFromImmutable``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetime.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetime.html","name":"DateTime","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 19:12:45 +0000","dateModified":"Tue, 25 Aug 2026 19:12:45 +0000","description":"DateTime and DateTimeImmutable is a class for the representation of date and time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetime.html"]}],"alternateName":["datetimeimmutable"],"keywords":["native class","date"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/date.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/calendar.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dateinterval.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/day-in-seconds.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/micro-second.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/clock.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetime-trap.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetimeinterface.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.datetime.php"},{"@type":"CreativeWork","name":"The DateTime Class","url":"https:\/\/www.phparch.com\/2022\/10\/the-php-datetime-class\/"},{"@type":"CreativeWork","name":"Dates and periods in PHP","url":"https:\/\/dev.to\/xwero\/dates-and-periods-in-php-46o1"},{"@type":"CreativeWork","name":"Tokei is a new PHP library dedicated to time-of-day","url":"https:\/\/nyamsprod.com\/blog\/tokei-a-time-handling-library-for-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"datetime"}]}]}</script>
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

+ [Dates](date.html)
+ [Calendar](calendar.html)
+ [DateInterval](dateinterval.html)
+ [Days Are Not 86400 Seconds](day-in-seconds.html)
+ [Micro-second](micro-second.html)
+ [Clock](clock.html)
+ [Datetime Trap](datetime-trap.html)
+ [DateTimeInterface](datetimeinterface.html)

## Related packages

+ [bakame/tokei](https://packagist.org/packages/bakame/tokei)
+ [nesbot/carbon](https://packagist.org/packages/nesbot/carbon)
+ [cakephp/chronos](https://packagist.org/packages/cakephp/chronos)
+ [brick/date-time](https://packagist.org/packages/brick/date-time)
