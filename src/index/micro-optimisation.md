# Micro-optimisation
A micro-optimisation is a piece of code that performs better than another, yet brings only a small gain of performance.

Micro-optimisation should be done only for highly constrained systems, or applications that deliver a high number of hits in short times: usually, it takes one to ten million usages for the gain to be visible.

Yet, micro-optimisations may be valuable in the long run, or as a good practice.

It is often pointless to discuss the micro-optimisation. It is a do or don't, and should raise a consensus, or be left alone.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/micro-optimisation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/micro-optimisation.html","name":"Micro-optimisation","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:48:47 +0000","dateModified":"Wed, 19 Aug 2026 06:48:47 +0000","description":"A micro-optimisation is a piece of code that performs better than another, yet brings only a small gain of performance","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/micro-optimisation.html"]}],"keywords":["performance","micro"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/performance.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/optimisation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/benchmarking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/profiler.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/implode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/latency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/premature-optimization.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/profiling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xhprof.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wiktionary.org\/wiki\/micro-optimization"},{"@type":"CreativeWork","name":"Stop Using These 5 Outdated Optimization Tricks in PHP","url":"https:\/\/medium.com\/@vlreshet\/stop-using-these-5-outdated-optimization-tricks-in-php-d2d616fd83fa"},{"@type":"CreativeWork","name":"What are compiler optimized internal PHP functions and should you import them via use statement?","url":"https:\/\/tideways.com\/profiler\/blog\/compiler-optimized-php-functions\/"},{"@type":"CreativeWork","name":"Data-Driven PHP 7 Performance Optimization Methods","url":"https:\/\/siit.co\/blog\/data-driven-php-7-performance-optimization-methods\/15727"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"micro-optimisation"}]}]}</script>
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
