# Used
Used is a state of a PHP structure. It has been declared, defined or created, but it is actually referred to in another expression. By essence, all structures should be used, as least once.

Being used happens in different ways: 

+ Constants are read
+ Variables are read, modified, unset
+ Parameters are read
+ Properties are read, modified, unset
+ Methods are called 
+ Classes are instantiated, called for their method, constants, properties
+ Traits are imported in a class or another trait
+ Interfaces are implemented, mentioned with ``instanceof`` or specified as type

``use`` expression do not guarantee usage: they import a structure, and alias it, but it, too, may be unused.

Usage may depend on an initial call that is never happening in production.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/used.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/used.ini.html","name":"Used","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:59 +0000","dateModified":"Fri, 19 Jun 2026 21:24:59 +0000","description":"Used is a state of a PHP structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Used.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    const A = 1;
    use const A as B;

    echo A;
    echo B;

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Reference_(computer_science))**
## Related

+ [Unused](unused.ini.html)
