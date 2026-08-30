---
type: "extension"
title: "Excimer"
description: "``Excimer`` is a low-overhead sampling profiler for PHP, developed by the Wikimedia Foundation."
resource: "https://www.mediawiki.org/wiki/Excimer"
tags: ["extension", "profiling"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Excimer

``Excimer`` is a low-overhead sampling profiler for PHP, developed by the Wikimedia Foundation. Unlike deterministic profilers such as Xdebug, which instrument every function call, Excimer periodically samples the call stack at a fixed interval, using a timer signal, which keeps overhead low enough to run in production.

Excimer can sample on wall-clock time or CPU time, which makes it useful for diagnosing both I/O-bound slowness, such as waiting on a database or a remote API, and CPU-bound slowness, such as heavy computation. Samples are collected into a log that can be aggregated into a flame graph or exported for further analysis.

Because sampling is cheap, Excimer is commonly left enabled at low sampling rates in production to catch real-world performance regressions that only appear under production load and traffic patterns, which synthetic benchmarks miss.

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

## Documentation
- [https://www.mediawiki.org/wiki/Excimer](https://www.mediawiki.org/wiki/Excimer)

## See Also
- [Excimer on Packagist](https://packagist.org/packages/wikimedia/php-excimer-ui)

## Related
- [Profiling](/features/profiling.md)
- [Blackfire](/features/blackfire.md)
- [Tideways](/features/tideways.md)
- [Xdebug](/features/xdebug.md)
- [Performance](/features/performance.md)

## Details
- Extension: ext-excimer

