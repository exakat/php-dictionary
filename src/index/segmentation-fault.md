# Segmentation Fault
``Segmentation fault`` is the laconic error message that is displayed when PHP crashes. It signals an error occurred during the execution of the PHP code, and it was not handled by any part of the engine. 

Segmentation faults are notoriously hard to fix. They are often linked to a bug, and there are some rare PHP syntax that leads to them. PHP 8.3 addresses them with a sensor that stops the problem before going out of hand.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/segmentation-fault.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/segmentation-fault.html","name":"Segmentation Fault","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``Segmentation fault`` is the laconic error message that is displayed when PHP crashes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Segmentation Fault.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [PHP Engine](php-engine.ini.html)
