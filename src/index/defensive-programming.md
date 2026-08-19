# Defensive Programming
Defensive programming is a programming approach where the code is written assuming that things can go wrong, even when they shouldn't, and it should actively guard against incorrect input, unexpected states, or misuse.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/defensive-programming.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/defensive-programming.html","name":"Defensive Programming","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Aug 2026 09:06:21 +0000","dateModified":"Mon, 17 Aug 2026 09:06:21 +0000","description":"Defensive programming is a programming approach where the code is written assuming that things can go wrong, even when they shouldn't, and it should actively guard against incorrect input, unexpected states, or misuse","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Defensive Programming.html"]}],"keywords":["paradigm"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/offensive-programming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/paradigm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/double-check.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Defensive_programming"},{"@type":"CreativeWork","name":"Learn 5 defensive programming techniques from experts","url":"https:\/\/www.techtarget.com\/searchsoftwarequality\/feature\/Learn-5-defensive-programming-techniques-from-experts"},{"@type":"CreativeWork","name":"Defensive programming: the good, the bad and the ugly","url":"https:\/\/enterprisecraftsmanship.com\/posts\/defensive-programming\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"defensive-programming"}]}]}</script>
```php
<?php

try {
    $number = random_int(0, 10);
} catch (Random\RandomException $e) {
    // This handle cases where no entropy sources are found 
    // This is very rare
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Defensive_programming)**
## See Also

+ [Learn 5 defensive programming techniques from experts](https://www.techtarget.com/searchsoftwarequality/feature/Learn-5-defensive-programming-techniques-from-experts)
+ [Defensive programming: the good, the bad and the ugly](https://enterprisecraftsmanship.com/posts/defensive-programming/)

## Related

+ [Offensive Programming](offensive-programming.html)
+ [Paradigm](paradigm.html)
+ [Double Check](double-check.html)
