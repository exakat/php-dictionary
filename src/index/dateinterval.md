# DateInterval
``DateInterval`` is a class for the representation of period of time, or stretch of time. It may be added to ``DateTimeImmutable`` and ``DateTime`` objects. It is only created as a time duration. 

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dateinterval.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dateinterval.html","name":"DateInterval","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Sep 2026 06:21:34 +0000","dateModified":"Tue, 01 Sep 2026 06:21:34 +0000","description":"DateInterval is a class for the representation of period of time, or stretch of time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dateinterval.html"]}],"keywords":["native class","date"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetime.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetime-trap.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/calendar.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/clock.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetimeinterface.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.dateinterval.php"},{"@type":"CreativeWork","name":"PHP: Dominate dates with intervals and periods","url":"https:\/\/darkghosthunter.medium.com\/php-dominate-dates-with-intervals-and-periods-7e66351e6ce2"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"dateinterval"}]}]}</script>
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

+ [DateTime](datetime.html)
+ [Datetime Trap](datetime-trap.html)
+ [Calendar](calendar.html)
+ [Clock](clock.html)
+ [DateTimeInterface](datetimeinterface.html)

## Related packages

+ [league/period](https://packagist.org/packages/league/period)
