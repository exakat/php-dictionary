# XHProf
``XHProf`` is a hierarchical, function-level profiler for PHP, originally developed at Facebook and later open-sourced. It measures wall-clock time, CPU time, and memory usage for every function call during a request, and produces a call graph that highlights the most expensive code paths.

Unlike step debuggers such as Xdebug, ``XHProf`` is designed to run with low overhead in production or staging environments, sampling real traffic rather than a single manually-triggered debug session. Its output can be rendered as a flat report or as a visual call graph, callgrind style, to spot bottlenecks quickly.

Modern forks and alternatives, such as Tideways' extension or the ``excimer`` sampling profiler, build on the same ideas, but ``XHProf`` remains a common reference point when discussing PHP profiling.
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

## See Also

+ [XHProf on GitHub](https://github.com/longxinH/xhprof)

Related : [Profiling](Profiling), [PHP Profiler](PHP Profiler), [Xdebug](Xdebug), [Blackfire](Blackfire), [Tideways](Tideways), [Flame Graph](Flame Graph), [Bottleneck](Bottleneck), [Micro-optimisation](Micro-optimisation)
