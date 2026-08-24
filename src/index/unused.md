# Unused
Unused is a state of a structure. It has been declared, defined or created, but it is not used, called, read. This is a characteristic of dead code.

Being unused happens to constants, variables, parameters, properties, methods, classes, traits, interfaces, use expressions.

It may also happen to results: some piece of data is calculated, returned, but then, not used. This often leads to a slower execution.

It also happens to propagate: removing an unused function may actually create another unused function, which was only called by the first one. 

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unused.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unused.html","name":"Unused","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:49:24 +0000","dateModified":"Wed, 19 Aug 2026 06:49:24 +0000","description":"Unused is a state of a structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unused.html"]}],"keywords":["concept","dead code","static analysis"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/used.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/useless.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/propagation.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Dead_code"},{"@type":"CreativeWork","name":"Psalm: UnusedClass","url":"https:\/\/psalm.dev\/docs\/running_psalm\/issues\/UnusedClass\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"unused"}]}]}</script>
```php
<?php

    const A = 1;
    const B = 2;

    echo A;

    // B is defined but not used

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Dead_code)**
## See Also

+ [Psalm: UnusedClass](https://psalm.dev/docs/running_psalm/issues/UnusedClass/)

## Related

+ [Used](used.html)
+ [Useless](useless.html)
+ [Propagation](propagation.html)
