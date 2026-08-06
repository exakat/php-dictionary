# Autovivification
Autovivification is the automatic creation of an array when a value is dereferenced.

Autovivification from scalars, including true, is deprecated since PHP 7.4 and removed in version 8.0. 

Autovivification from ``false`` is deprecated since PHP 8.1. 

Autovivification from null is valid.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/autovivification.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/autovivification.html","name":"Autovivification","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Autovivification is the automatic creation of an array when a value is dereferenced","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Autovivification.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Null](null.ini.html)
+ [False](false.ini.html)
+ [Array, []](array.ini.html)
+ [Default Value](default-value.ini.html)
