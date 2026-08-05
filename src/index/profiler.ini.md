# PHP Profiler
A profiler is an application that helps track execution performances, and spots slow parts of the application for optimization.

PHP has several profilers. They may provide an online interface to visualize the results, or a local server, or even a raw execution breakdown, which may then be processed to identify the bottlenecks.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/profiler.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/profiler.ini.html","name":"PHP Profiler","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 04:39:23 +0000","dateModified":"Thu, 16 Jul 2026 04:39:23 +0000","description":"A profiler is an application that helps track execution performances, and spots slow parts of the application for optimization","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/PHP Profiler.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Debugger](debugger.ini.html)
+ [Bottleneck](bottleneck.ini.html)
+ [Flame Graph](flamegraph.ini.html)
+ [Micro-optimisation](micro-optimisation.ini.html)
+ [Blackfire](blackfire.ini.html)
+ [Premature Optimization](premature-optimization.ini.html)
+ [Profiling](profiling.ini.html)
+ [Tideways](tideways.ini.html)
