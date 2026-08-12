# PHP Profiler
A profiler is an application that helps track execution performances, and spots slow parts of the application for optimization.

PHP has several profilers. They may provide an online interface to visualize the results, or a local server, or even a raw execution breakdown, which may then be processed to identify the bottlenecks.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/profiler.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/profiler.html","name":"PHP Profiler","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A profiler is an application that helps track execution performances, and spots slow parts of the application for optimization","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/PHP Profiler.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"profiler"}]}]}</script>
```php
<?php

    // code to use with PHP-spx, one of PHP profilers
    
    while ($task = get_next_ready_task()) {
      spx_profiler_start();
      try {
        $task->process();
      } finally {
        spx_profiler_stop();
      }
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Profiling_(computer_programming))**
## See Also

+ [BlackFire](https://www.blackfire.io/php/)
+ [PHP-profiler](https://github.com/perftools/php-profiler.git)
+ [PHP-reli](https://github.com/reliforp/reli-prof.git)
+ [XHprof (PHP manual)](https://www.php.net/manual/en/book.xhprof.php)
+ [Xdebug](https://www.xdebug.org/)

## Related

+ [Debugger](debugger.html)
+ [Bottleneck](bottleneck.html)
+ [Flame Graph](flamegraph.html)
+ [Micro-optimisation](micro-optimisation.html)
+ [Blackfire](blackfire.html)
+ [Premature Optimization](premature-optimization.html)
+ [Profiling](profiling.html)
+ [Tideways](tideways.html)
