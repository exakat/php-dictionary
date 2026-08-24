# Memoization
Memoization is an optimisation technique to speed up a function by avoiding re-processing previously calculated results. 

Usually, memoization trades processing time with memory. The best suited situation are when the load takes some time to process, and the result is a small amount of memory, such as a count.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memoization.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memoization.html","name":"Memoization","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 08:15:55 +0000","dateModified":"Thu, 13 Aug 2026 08:15:55 +0000","description":"Memoization is an optimisation technique to speed up a function by avoiding re-processing previously calculated results","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memoization.html"]}],"keywords":["technique"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/performance.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/optimisation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pure-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/functional-programming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/determinism.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/eddmann.com\/posts\/implementing-and-using-memoization-in-php\/"},{"@type":"CreativeWork","name":"Memoization in PHP","url":"https:\/\/www.honeybadger.io\/blog\/memoization-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"memoization"}]}]}</script>
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
## See Also

+ [Memoization in PHP](https://www.honeybadger.io/blog/memoization-in-php/)

## Related

+ [Cache](cache.html)
+ [Performance](performance.html)
+ [Optimisation](optimisation.html)
+ [Pure Function](pure-function.html)
+ [Functional Programming](functional-programming.html)
+ [Determinism](determinism.html)
