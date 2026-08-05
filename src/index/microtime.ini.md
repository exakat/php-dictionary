# microtime()
``microtime()`` is a native PHP function, which returns the current timestamp, with the microseconds. This is a very precise measure of time. 

``microtime()`` is often used for speed measures, and it may be easily replaced by ``hrtime()`` for such purpose, since PHP 7.3.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/microtime.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/microtime.ini.html","name":"microtime()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 15:21:12 +0000","dateModified":"Fri, 24 Jul 2026 15:21:12 +0000","description":"``microtime()`` is a native PHP function, which returns the current timestamp, with the microseconds","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/microtime().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [hrtime()](hrtime.ini.html)
+ [Micro-second](micro-second.ini.html)
