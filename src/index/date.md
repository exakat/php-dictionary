# Dates
These functions allow to get the date and time from the server where the application is running. These functions format the date and time in many different ways.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/date.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/date.html","name":"Dates","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"These functions allow to get the date and time from the server where the application is running","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Dates.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Dates"}]}]}</script>
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

+ [Datetime Trap](datetime-trap.html)
+ [DateTime](datetime.html)
+ [DateTimeInterface](datetimeinterface.html)
