# PHP Profiler
A profiler is an application that helps track execution performances, and spots slow parts of the application for optimization.

PHP has several profilers. They may provide an online interface to visualize the results, or a local server, or even a raw execution breakdown, which may then be processed to identify the bottlenecks.
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

## See Also

+ [BlackFire](https://www.blackfire.io/php/)
+ [PHP-profiler](https://github.com/perftools/php-profiler.git)
+ [PHP-reli](https://github.com/reliforp/reli-prof.git)
+ [XHprof (PHP manual)](https://www.php.net/manual/en/book.xhprof.php)
+ [Xdebug](https://www.xdebug.org/)

Related : [Debugger](Debugger), [Bottleneck](Bottleneck), [Flame Graph](Flame Graph), [Micro-optimisation](Micro-optimisation), [Blackfire](Blackfire), [Premature Optimization](Premature Optimization), [Profiling](Profiling), [Tideways](Tideways)
