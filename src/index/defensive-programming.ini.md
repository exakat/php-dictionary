# Defensive Programming
Defensive programming is a programming approach where the code is written assuming that things can go wrong, even when they shouldn't, and it should actively guard against incorrect input, unexpected states, or misuse.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/defensive-programming.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/defensive-programming.ini.html","name":"Defensive Programming","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Defensive programming is a programming approach where the code is written assuming that things can go wrong, even when they shouldn't, and it should actively guard against incorrect input, unexpected states, or misuse","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Defensive Programming.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [Offensive Programming](offensive-programming.ini.html)
+ [Paradigm](paradigm.ini.html)
+ [Double Check](double-check.ini.html)
