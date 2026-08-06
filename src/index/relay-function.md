# Relay Function
A relay function, or a relay method, is a function that calls another function, with the same arguments. It is merely relaying the arguments from one to the other.

A relay function also returns the value of the relayed function.

A relay function does not add any added value over the other function, except a renaming of the feature.

Relay functions may be nested several levels, depending on the situation.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/relay-function.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/relay-function.html","name":"Relay Function","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:30:05 +0000","dateModified":"Fri, 19 Jun 2026 21:30:05 +0000","description":"A relay function, or a relay method, is a function that calls another function, with the same arguments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Relay Function.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function foo($a) {
        return goo($a);
    }
    
    function goo($a) {
        return hoo($a);
    }
    
    function hoo($a) {
        return doSomething();
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Delegation_pattern)**
## Related

+ [Functions](function.ini.html)
+ [Method](method.ini.html)
+ [Direct Output](direct-output.ini.html)
+ [Flexibility](flexibility.ini.html)
