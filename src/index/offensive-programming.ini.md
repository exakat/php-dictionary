# Offensive Programming
Offensive programming is a programming approach where the code is written code assuming that internal states should never go wrong, and don't have to be guarded against. Only external input, such as user input, should be thoroughly validated before usage.

Offensive programming requires drawing a line between internal and external data: while user input is obviously to be validated, there must be a clear rule for data coming from related services such as database, remote servers, API, file systems.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/offensive-programming.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/offensive-programming.ini.html","name":"Offensive Programming","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 17:18:07 +0000","dateModified":"Mon, 03 Aug 2026 17:18:07 +0000","description":"Offensive programming is a programming approach where the code is written code assuming that internal states should never go wrong, and don't have to be guarded against","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Offensive Programming.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $number = random_int(0, 10);
    // This handle cases where no entropy sources are found 

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Defensive_programming)**
## Related

+ [Defensive Programming](defensive-programming.ini.html)
+ [Paradigm](paradigm.ini.html)
