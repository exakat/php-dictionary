# Switch Case
A switch case, also called case, is an option in a ``switch()`` or a ``match()`` expression. 

In a ``switch()``, several cases may be used in a row, to apply the same code. This is not possible with ``match()``.

In a`` switch()``, the case's code is executed until the end of the ``switch()``, or a ``break`` command. A case that uses its own code, and the following case's code is called a fallthrough. 

There is a default case, which is called when all other cases fail.

In the event of multiple identical cases, the first one is used. PHP adapts the type of the values while looking for the right case.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/switch-case.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/switch-case.html","name":"Switch Case","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:17:09 +0000","dateModified":"Fri, 10 Jul 2026 09:17:09 +0000","description":"A switch case, also called case, is an option in a ``switch()`` or a ``match()`` expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Switch Case.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

switch($x) {
    case 'a':
    case 'c':
        $a = 1;
        // fall through
        
    case 'b' :
        $a =2;
        break 1;
        
    // default case, when $x is not 'a' 'b' or 'c'
    default :
        $a = 3;
}

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.switch.php)**
## Related

+ [Default](default.ini.html)
+ [Break](break.ini.html)
+ [Switch](switch.ini.html)
+ [Match](match.ini.html)
+ [Switch Default](switch-default.ini.html)
+ [Case](case.ini.html)
