# Excimer
``Excimer`` is a low-overhead sampling profiler for PHP, developed by the Wikimedia Foundation. Unlike deterministic profilers such as Xdebug, which instrument every function call, Excimer periodically samples the call stack at a fixed interval, using a timer signal, which keeps overhead low enough to run in production.

Excimer can sample on wall-clock time or CPU time, which makes it useful for diagnosing both I/O-bound slowness, such as waiting on a database or a remote API, and CPU-bound slowness, such as heavy computation. Samples are collected into a log that can be aggregated into a flame graph or exported for further analysis.

Because sampling is cheap, Excimer is commonly left enabled at low sampling rates in production to catch real-world performance regressions that only appear under production load and traffic patterns, which synthetic benchmarks miss.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/excimer.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/excimer.html","name":"Excimer","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:52:21 +0000","dateModified":"Wed, 15 Jul 2026 13:52:21 +0000","description":"``Excimer`` is a low-overhead sampling profiler for PHP, developed by the Wikimedia Foundation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Excimer.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Excimer"}]}]}</script>
```php
<?php

    // Sample the call stack every 100ms of wall-clock time.
    $profiler = new ExcimerProfiler();
    $profiler->setPeriod(0.1);
    $profiler->setEventType(EXCIMER_REAL);
    $profiler->start();

    // ... application code runs here ...

    $profiler->stop();

    $log = $profiler->getLog();
    foreach ($log as $event) {
        foreach ($event->getTrace() as $frame) {
            echo $frame['function'] . PHP_EOL;
        }
    }

?>
```

**[Documentation](https://www.mediawiki.org/wiki/Excimer)**
## See Also

+ [Excimer on Packagist](https://packagist.org/packages/wikimedia/php-excimer-ui)

## Related

+ [Profiling](profiling.html)
+ [Blackfire](blackfire.html)
+ [Tideways](tideways.html)
+ [Xdebug](xdebug.html)
+ [Flame Graph](flame-graph.html)
+ [Performance](performance.html)
