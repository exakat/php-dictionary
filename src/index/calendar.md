# Calendar
The calendar extension provides functions to convert dates between different calendars, such as Gregorian, Julian Day Count, Unixtimestamp, French Revolutionary, Jewish, and others.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/calendar.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/calendar.html","name":"Calendar","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The calendar extension provides functions to convert dates between different calendars, such as Gregorian, Julian Day Count, Unixtimestamp, French Revolutionary, Jewish, and others","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Calendar.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Calendar"}]}]}</script>
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

+ [DateTime](datetime.html)
+ [DateInterval](dateinterval.html)
