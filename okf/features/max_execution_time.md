---
type: "directive"
title: "max_execution_time"
description: "The ``max_execution_time`` directive sets the maximum amount of time that PHP will work on an application."
resource: "https://www.php.net/manual/en/ini.core.php#ini.max-execution-time"
tags: ["directive"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# max_execution_time

The ``max_execution_time`` directive sets the maximum amount of time that PHP will work on an application. 

The default value is 30 seconds. It may be lowered down to 1 second, or set to infinity with -1.

``max_execution_time`` may be changed from the code with ``set_time_limit()``. This function may also be disabled, and not available.

It is recommended to set this value as low as possible, and optimize the code to run below that limit.

## Documentation
- [https://www.php.net/manual/en/ini.core.php#ini.max-execution-time](https://www.php.net/manual/en/ini.core.php#ini.max-execution-time)

## See Also
- [PHP max_execution_time Guide](https://www.a2hosting.com/kb/developer-corner/php/using-php.ini-directives/php-maximum-execution-time)
- [What is the best value for max_execution_time in PHP?](https://tideways.com/profiler/blog/what-is-the-best-value-for-max-execution-time-in-php)

## Related
- [Directives](/features/directive.md)
- [Execution Time](/features/execution-time.md)
- [PHP, Hypertext Preprocessor (PHP)](/features/php.md)
- [ini_set()](/features/ini_set.md)
- [Infinite Loop](/features/infinite-loop.md)

