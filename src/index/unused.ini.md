# Unused
Unused is a state of a PHP structure. It has been declared, defined or created, but it is not used, called, read. This is characteristics of dead code.

Being unused happens to constants, variables, parameters, properties, methods, classes, traits, interfaces, use expression. 

It also happens to propagate: removing an unused function may actually create another unused function, which was only called by the first one. 

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/unused.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/unused.ini.html","name":"Unused","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 23 Jun 2026 11:45:46 +0000","dateModified":"Tue, 23 Jun 2026 11:45:46 +0000","description":"Unused is a state of a PHP structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Unused.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    const A = 1;
    const B = 2;

    echo A;

    // B is defined but not used

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Dead_code)**
## Related

+ [Used](used.ini.html)
+ [Useless](useless.ini.html)
