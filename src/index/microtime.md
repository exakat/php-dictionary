# microtime()
``microtime()`` is a native PHP function, which returns the current timestamp, with the microseconds. This is a very precise measure of time. 

``microtime()`` is often used for speed measures, and it may be easily replaced by ``hrtime()`` for such purpose, since PHP 7.3.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/microtime.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/microtime.html","name":"microtime()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 15:21:12 +0000","dateModified":"Fri, 24 Jul 2026 15:21:12 +0000","description":"``microtime()`` is a native PHP function, which returns the current timestamp, with the microseconds","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/microtime().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"microtime"}]}]}</script>
```php
<?php

    $time_start = microtime(true);
    
    // Sleep some time
    usleep(100);
    
    $time_end = microtime(true);
    $time = $time_end - $time_start;
    
    echo "Slept for $time seconds\n";

?>
```

**[Documentation](https://www.php.net/manual/fr/function.microtime.php)**
## See Also

+ [hrtime](https://www.php.net/manual/fr/function.hrtime.php)

## Related

+ [hrtime()](hrtime.html)
+ [Micro-second](micro-second.html)
