---
type: "PHP Feature"
title: "Memory"
description: "Memory refers to the portion of server RAM that PHP uses to execute scripts."
resource: "https://www.php.net/manual/en/ini.core.php#ini.memory-limit"
tags: ["resource"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Memory

Memory refers to the portion of server RAM that PHP uses to execute scripts. 

Whenever a PHP application runs, it needs memory to load the PHP engine, parse the code, store data and various caches.

Memory usage is controlled by the ``memory_limit`` directive, and functions like ``memory_get_usage()``.

PHP handles the memory management, and there is little more to do beyond setting the overall limit, although some features may become memory hungry easily, such as ``array_merge()`` in loops, or the ``N+1 query`` problem.

## Documentation
- [https://www.php.net/manual/en/ini.core.php#ini.memory-limit](https://www.php.net/manual/en/ini.core.php#ini.memory-limit)

## See Also
- [Mastering PHP Memory Limits: A Complete Guide](https://nestify.io/blog/php-memory-limit/)
- [PHP Memory Management: How to Monitor Usage, Peaks, and Limits](https://dev.to/lifeportal20002010/php-memory-management-how-to-monitor-usage-peaks-and-limits-4l1a)

## Related
- [memory_limit](/features/memory_limit.md)
- [Circular Reference](/features/circular-reference.md)
- [Free](/features/free.md)
- [Garbage Collection](/features/garbage-collection.md)
- [Shared Memory](/features/shared-memory.md)
- [Treemap](/features/treemap.md)

