# Offensive Programming
Offensive programming is a programming approach where the code is written code assuming that internal states should never go wrong, and don't have to be guarded against. Only external input, such as user input, should be thoroughly validated before usage.

Offensive programming requires drawing a line between internal and external data: while user input is obviously to be validated, there must be a clear rule for data coming from related services such as database, remote servers, API, file systems.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/offensive-programming.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/offensive-programming.html","name":"Offensive Programming","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Aug 2026 09:44:22 +0000","dateModified":"Fri, 07 Aug 2026 09:44:22 +0000","description":"Offensive programming is a programming approach where the code is written code assuming that internal states should never go wrong, and don't have to be guarded against","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Offensive Programming.html"]}],"keywords":["paradigm"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/defensive-programming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/paradigm.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Defensive_programming"},{"@type":"CreativeWork","name":"Offensive programming","url":"https:\/\/en.wikipedia.org\/wiki\/Offensive_programming"},{"@type":"CreativeWork","name":"Defensive Coding Crash Course","url":"https:\/\/www.phparch.com\/2019\/08\/defensive-coding-crash-course\/"},{"@type":"CreativeWork","name":"More Tips for Defensive Programming in PHP","url":"https:\/\/www.sitepoint.com\/more-tips-for-defensive-programming-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"offensive-programming"}]}]}</script>
```php
<?php

    $number = random_int(0, 10);
    // This handle cases where no entropy sources are found 

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Defensive_programming)**
## See Also

+ [Offensive programming](https://en.wikipedia.org/wiki/Offensive_programming)
+ [Defensive Coding Crash Course](https://www.phparch.com/2019/08/defensive-coding-crash-course/)
+ [More Tips for Defensive Programming in PHP](https://www.sitepoint.com/more-tips-for-defensive-programming-in-php/)

## Related

+ [Defensive Programming](defensive-programming.html)
+ [Paradigm](paradigm.html)
