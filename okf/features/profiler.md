---
type: "PHP Feature"
title: "PHP Profiler"
description: "A profiler is an application that helps track execution performances, and spots slow parts of the application for optimization."
resource: "https://en.wikipedia.org/wiki/Profiling_(computer_programming)"
tags: ["optimisation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://en.wikipedia.org/wiki/Profiling_(computer_programming)](https://en.wikipedia.org/wiki/Profiling_(computer_programming))

## See Also
- [BlackFire](https://www.blackfire.io/php/)
- [PHP-profiler](https://github.com/perftools/php-profiler.git)
- [PHP-reli](https://github.com/reliforp/reli-prof.git)
- [XHprof (PHP manual)](https://www.php.net/manual/en/book.xhprof.php)
- [Xdebug](https://www.xdebug.org/)

## Related
- [Debugger](/features/debugger.md)
- [Bottleneck](/features/bottleneck.md)
- [Flame Graph](/features/flamegraph.md)
- [Micro-optimisation](/features/micro-optimisation.md)
- [Blackfire](/features/blackfire.md)
- [Premature Optimization](/features/premature-optimization.md)
- [Profiling](/features/profiling.md)
- [Tideways](/features/tideways.md)

