# XHProf
``XHProf`` is a hierarchical, function-level profiler for PHP, originally developed at Facebook and later open-sourced. It measures wall-clock time, CPU time, and memory usage for every function call during a request, and produces a call graph that highlights the most expensive code paths.

Unlike step debuggers such as Xdebug, ``XHProf`` is designed to run with low overhead in production or staging environments, sampling real traffic rather than a single manually-triggered debug session. Its output can be rendered as a flat report or as a visual call graph, ``callgrind`` style, to spot bottlenecks quickly.

Modern forks and alternatives, such as Tideways' extension or the ``excimer`` sampling profiler, build on the same ideas, but ``XHProf`` remains a common reference point when discussing PHP profiling.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xhprof.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xhprof.html","name":"XHProf","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:29:31 +0000","dateModified":"Thu, 06 Aug 2026 05:29:31 +0000","description":"XHProf is a hierarchical, function-level profiler for PHP, originally developed at Facebook and later open-sourced","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/XHProf.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"xhprof"}]}]}</script>
```php
<?php

    xhprof_enable(XHPROF_FLAGS_CPU | XHPROF_FLAGS_MEMORY);

    run_expensive_task();

    $data = xhprof_disable();

    include_once '/path/to/xhprof_lib/utils/xhprof_lib.php';
    include_once '/path/to/xhprof_lib/utils/xhprof_runs.php';

    $xhprofRuns = new XHProfRuns_Default();
    $runId = $xhprofRuns->save_run($data, 'my_app');

?>
```

**[Documentation](https://www.php.net/manual/en/book.xhprof.php)**
## See Also

+ [XHProf on GitHub](https://github.com/longxinH/xhprof)

## Related

+ [Profiling](profiling.html)
+ [PHP Profiler](profiler.html)
+ [Xdebug](xdebug.html)
+ [Blackfire](blackfire.html)
+ [Tideways](tideways.html)
+ [Flame Graph](flamegraph.html)
+ [Bottleneck](bottleneck.html)
+ [Micro-optimisation](micro-optimisation.html)
