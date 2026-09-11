# Infinite Loop
An infinite loop never ends, unless an external event make it break out of itself.

Infinite loops are usually un wanted, and should be avoided. They happen when an exit condition is forgotten, omitted or tests a stationary aspect of the loop. That way, the loop keeps repeating.

PHP prevents infinite loop automatically, by enforcing the ``max_execution_time`` or ``memory_limit`` error.

Infinite loop are also a base structure in event loops: the code waits for an event by repeating itself, with a time moderation to avoid wasting too much energy. As such, it is a feature.



<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/infinite-loop.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/infinite-loop.html","name":"Infinite Loop","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 11 Sep 2026 09:50:49 +0000","dateModified":"Fri, 11 Sep 2026 09:50:49 +0000","description":"An infinite loop never ends, unless an external event make it break out of itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/infinite-loop.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inf.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/infinite.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/infiniteiterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/max_execution_time.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/return-value.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/fr.wikipedia.org\/wiki\/Infinite_Loop"},{"@type":"CreativeWork","name":"Infinite loops in PHP","url":"https:\/\/www.exakat.io\/infinite-loops-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.35","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"infinite-loop"}]}]}</script>
```php
<?php

    // infinite loop while
    while(true) { }
    
    // infinite loop while
    do { } while(1);
    
    for(;;) {} 

?>
```

**[Documentation](https://fr.wikipedia.org/wiki/Infinite_Loop)**
## See Also

+ [Infinite loops in PHP](https://www.exakat.io/infinite-loops-in-php/)

## Related

+ [INF](inf.html)
+ [Infinite](infinite.html)
+ [InfiniteIterator](infiniteiterator.html)
+ [max\_execution\_time](max_execution_time.html)
+ [Return Value](return-value.html)
