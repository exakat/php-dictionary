# Autovivification
Autovivification is the automatic creation of an array when a value is dereferenced.

Autovivification from scalars, including true, is deprecated since PHP 7.4 and removed in version 8.0. 

Autovivification from ``false`` is deprecated since PHP 8.1. 

Autovivification from null is valid.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autovivification.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autovivification.html","name":"Autovivification","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Autovivification is the automatic creation of an array when a value is dereferenced","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Autovivification.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"autovivification"}]}]}</script>
```php
<?php

    $a = false;
    $a[1] = 2;
    
    $b = null;
    $b[3] = 4;

?>
```

**[Documentation](https://www.php.net/manual/en/migration81.deprecated.php#migration81.deprecated.core.autovivification-false)**
## See Also

+ [Autovivification on wikipedia](https://en.wikipedia.org/wiki/Autovivification)

## Related

+ [Null](null.html)
+ [False](false.html)
+ [Array, []](array.html)
+ [Default Value](default-value.html)
