---
type: "PHP Feature"
title: "Garbage Collection"
description: "Garbage collection is a PHP mechanism that checks memory and frees it when it needs to store new values."
resource: "https://www.php.net/manual/en/features.gc.php"
tags: ["php engine"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Garbage Collection

Garbage collection is a PHP mechanism that checks memory and frees it when it needs to store new values. 

PHP allocates memory as it needs, when variables and objects are created in the code. Sometimes, those variables are destroyed, using explicit ``unset()`` calls, or implicitly, when leaving a method or destroying an object.

To speed up the process, PHP postpones memory cleaning until the end of the application, or when it reaches some internal threshold. Then, it reviews all the currently allocated variables, and when they are not used anymore, that is when the reference counter is down to 0, it removes them.

As garbage collection requires pausing the execution, PHP only runs it on-demand, via ``gc_collect_cycles()`` calls, or once every ten thousand objects to clear.

Garbage collection is needed to handle circular reference: objects that mutually reference each other, and which requires some processing to identify as dead data.

```php
<?php

    // Explicit Garbage Collection 
    gc_collect_cycles();

    // implicit garbage collection
    // well,... difficult to illustrate, right?

?>
```

## Documentation
- [https://www.php.net/manual/en/features.gc.php](https://www.php.net/manual/en/features.gc.php)

## See Also
- [Easy to understand PHP garbage collection mechanism](https://medium.com/geekculture/easy-to-understand-php-garbage-collection-mechanism-ee5c5bde5a5d)

## Related
- [Zval](/features/zval.md)
- [References](/features/reference.md)
- [Reference Count](/features/reference-count.md)
- [Circular Reference](/features/circular-reference.md)
- [unset()](/features/unset.md)
- [Weakmap](/features/weakmap.md)
- [Memory](/features/memory.md)
- [Memory Leak](/features/memory-leak.md)
- [Ownership](/features/borrow-checking.md)
- [Linear Type](/features/linear-type.md)
- [Memory Arena](/features/memory-arena.md)
- [Object Lifecycle](/features/object-lifecycle.md)
- [Shutdown](/features/shutdown.md)

