# Switch Default
A switch default, also called default, is the catch-all option in a ``switch()`` or a ``match()`` expression. 

In a ``switch()``, the default case may be stacked with other cases, to apply the same code. This is not possible with ``match()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/switch-default.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/switch-default.ini.html","name":"Switch Default","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 08:15:13 +0000","dateModified":"Thu, 02 Jul 2026 08:15:13 +0000","description":"A switch default, also called default, is the catch-all option in a ``switch()`` or a ``match()`` expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Switch Default.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    switch($x) {
        case 'a':
        default:
            $a = 1;
            // fall through
            
        case 'b' :
            $a =2;
            break 1;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.switch.php)**
## Related

+ [Default](default.ini.html)
+ [Switch](switch.ini.html)
+ [Match](match.ini.html)
+ [Switch Case](switch-case.ini.html)
