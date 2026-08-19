# Relay Function
A relay function, or a relay method, is a function that calls another function, with the same arguments. It is merely relaying the arguments from one to the other.

A relay function also returns the value of the relayed function.

A relay function does not add any added value over the other function, except a renaming of the feature.

Relay functions may be nested several levels, depending on the situation.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relay-function.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relay-function.html","name":"Relay Function","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:06:45 +0000","dateModified":"Fri, 14 Aug 2026 08:06:45 +0000","description":"A relay function, or a relay method, is a function that calls another function, with the same arguments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Relay Function.html"]}],"alternateName":["relay-method"],"keywords":["method"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/direct-output.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/flexibility.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Delegation_pattern"},{"@type":"CreativeWork","name":"Proxy pattern","url":"https:\/\/en.wikipedia.org\/wiki\/Proxy_pattern"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"relay-function"}]}]}</script>
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
## See Also

+ [Proxy pattern](https://en.wikipedia.org/wiki/Proxy_pattern)

## Related

+ [Functions](function.html)
+ [Method](method.html)
+ [Direct Output](direct-output.html)
+ [Flexibility](flexibility.html)
