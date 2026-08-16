# Segmentation Fault
``Segmentation fault`` is the laconic error message that is displayed when PHP crashes. It signals that an error occurred during the execution of the PHP code, and it was not handled by any part of the engine. 

Segmentation faults are notoriously hard to fix. They are often linked to a bug, and there are some rare PHP syntax that leads to them. PHP 8.3 addresses them with a sensor that stops the problem before it gets out of hand.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/segmentation-fault.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/segmentation-fault.html","name":"Segmentation Fault","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 07:51:48 +0000","dateModified":"Fri, 14 Aug 2026 07:51:48 +0000","description":"Segmentation fault is the laconic error message that is displayed when PHP crashes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Segmentation Fault.html"]}],"keywords":["error"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-engine.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.zend.com\/blog\/debugging-php-segmentation-faults"},{"@type":"CreativeWork","name":"Find Segfaults in PHP like a boss","url":"https:\/\/jolicode.com\/blog\/find-segfaults-in-php-like-a-boss"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"segmentation-fault"}]}]}</script>
```php
<?php

    // start the file by including itself immediately.
    // What do you expect? 
    include __FILE__; 
    
    // Until PHP 8.3
    // Segmentation fault

?>
```

**[Documentation](https://www.zend.com/blog/debugging-php-segmentation-faults)**
## See Also

+ [Find Segfaults in PHP like a boss](https://jolicode.com/blog/find-segfaults-in-php-like-a-boss)

## Related

+ [PHP Engine](php-engine.html)
