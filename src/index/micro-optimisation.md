# Micro-optimisation
A micro-optimisation is a piece of code that performs better than another, yet brings only a small gain of performance.

Micro-optimisation should be done only for highly constraints systems, or application that deliver a high number of hits in short times: usually, it takes one to ten millions usage for the gain to be visible. 

Yet, micro-optimisations may be valuable on the long run, or as a good practice. 

It is often a pointless to discuss the micro-optimisation. It is a do or don't, and should raise a consensus, or left alone.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/micro-optimisation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/micro-optimisation.html","name":"Micro-optimisation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A micro-optimisation is a piece of code that performs better than another, yet brings only a small gain of performance","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Micro-optimisation.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"micro-optimisation"}]}]}</script>
```php
<?php

    // this is faster than calling 3 times echo
    echo 1, 2, 3;
    
    // This is slower, yet it doesn't speed up the process a lot
    echo 1;
    echo 2;
    echo 3;

?>
```

**[Documentation](https://en.wiktionary.org/wiki/micro-optimization)**
## See Also

+ [Stop Using These 5 Outdated Optimization Tricks in PHP](https://medium.com/@vlreshet/stop-using-these-5-outdated-optimization-tricks-in-php-d2d616fd83fa)
+ [What are compiler optimized internal PHP functions and should you import them via use statement?](https://tideways.com/profiler/blog/compiler-optimized-php-functions/)
+ [Data-Driven PHP 7 Performance Optimization Methods](https://siit.co/blog/data-driven-php-7-performance-optimization-methods/15727)

## Related

+ [Performance](performance.html)
+ [Optimisation](optimisation.html)
+ [Benchmarking](benchmarking.html)
+ [PHP Profiler](profiler.html)
+ [implode()](implode.html)
+ [Latency](latency.html)
+ [Premature Optimization](premature-optimization.html)
+ [Profiling](profiling.html)
+ [XHProf](xhprof.html)
