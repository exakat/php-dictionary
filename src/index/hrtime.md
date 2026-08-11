# hrtime()
``hrtime()`` is a native PHP function and an PIE extension. As a function, ``hrtime()`` returns the high precision time of the system. 

``HRT`` represents an acronym of ``High Resolution Time``. 

The time is of high precision, but counted from an arbitrary point of time: the value of this function is in calculating differences between two ``hrtime()`` calls, rather than the obtained value.

``hrtime()`` is a modern replacement for ``microtime()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hrtime.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hrtime.html","name":"hrtime()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 08:04:07 +0000","dateModified":"Mon, 13 Jul 2026 08:04:07 +0000","description":"``hrtime()`` is a native PHP function and an PIE extension","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hrtime().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"hrtime"}]}]}</script>
```php
<?php

    $timeStart = hrtime(true);
    
    // Sleep some time
    usleep(100);
    
    $timeEnd = hrtime(true);
    $time = $timeEnd - $timeStart;
    
    echo "Slept for $time micro-seconds\n";
    
?>
```

**[Documentation](https://www.php.net/manual/fr/function.hrtime.php)**
## See Also

+ [PHP hrtime Function](https://zetcode.com/php/hrtime/)

## Related

+ [microtime()](microtime.html)
+ [Micro-second](micro-second.html)
+ [sleep](sleep.html)
