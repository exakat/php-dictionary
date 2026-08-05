# hrtime()
``hrtime()`` is a native PHP function and an PIE extension. As a function, ``hrtime()`` returns the high precision time of the system. 

``HRT`` represents an acronym of ``High Resolution Time``. 

The time is of high precision, but counted from an arbitrary point of time: the value of this function is in calculating differences between two ``hrtime()`` calls, rather than the obtained value.

``hrtime()`` is a modern replacement for ``microtime()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/hrtime.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/hrtime.ini.html","name":"hrtime()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 08:04:07 +0000","dateModified":"Mon, 13 Jul 2026 08:04:07 +0000","description":"``hrtime()`` is a native PHP function and an PIE extension","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/hrtime().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [microtime()](microtime.ini.html)
+ [Micro-second](micro-second.ini.html)
+ [sleep](sleep.ini.html)
