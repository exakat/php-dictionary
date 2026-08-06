# Memoization
Memoization is an optimisation technique to speed up a function by avoiding re-processing previously calculated results. 

Usually, memoization trades processing time with memory. The best suited situation are when the load takes some time to process, and the result is a small amount of memory, such as a count.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/memoization.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/memoization.html","name":"Memoization","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Memoization is an optimisation technique to speed up a function by avoiding re-processing previously calculated results","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Memoization.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

function docs($file) {
    // local cache 
    static $cache = [];
    
    // If it was already cached, use it. 
    // Docs are supported to be constant during the execution
    if (isset($cache[$file])) {
        return $cache[$file];
    }
    
    $cache[$file] = file_get_contents($file) ?? '';
}

?>
```

**[Documentation](https://eddmann.com/posts/implementing-and-using-memoization-in-php/)**
## Related

+ [Cache](cache.ini.html)
+ [Performance](performance.ini.html)
+ [Optimisation](optimisation.ini.html)
+ [Pure Function](pure-function.ini.html)
+ [Functional Programming](functional-programming.ini.html)
+ [Determinism](determinism.ini.html)
