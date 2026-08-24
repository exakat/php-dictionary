# Days Are Not 86400 Seconds
Days in seconds is a classic bug when dealing with dates. It happens when adding 86400 seconds to a time to get the same time on the next day. 

The bug will happen most commonly twice a year, at the change of time from winter to summer time. Those days are one hour longer or shorter and lead to calculating the wrong time on the next day. 

This bug may also have an impact when the internal clock of the server is updated, or when extra leap seconds are added, on ``December 31st`` or ``June 30th``. It depends on the years.

When dealing with days, it is recommended to use an interval, or use a relative expression like ``'tomorrow'``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/day-in-seconds.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/day-in-seconds.html","name":"Days Are Not 86400 Seconds","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:52:53 +0000","dateModified":"Tue, 11 Aug 2026 20:52:53 +0000","description":"Days in seconds is a classic bug when dealing with dates","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/day-in-seconds.html"]}],"keywords":["classic bug"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/days-in-month.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetime.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/medium.com\/@dotcom.software\/a-day-is-not-86400-seconds-51d95848b622"},{"@type":"CreativeWork","name":"Adding 86400 seconds to Oct. 25 1998 gives wrong answer","url":"https:\/\/bugs.php.net\/bug.php?id=741"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"day-in-seconds"}]}]}</script>
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

+ [Days In Month](days-in-month.html)
+ [DateTime](datetime.html)
