---
type: "PHP Feature"
title: "Mutex"
description: "A mutex, a mutual exclusion, is a synchronization primitive that prevents multiple processes or threads from accessing a shared resource simultaneously."
resource: "https://en.wikipedia.org/wiki/Mutual_exclusion"
tags: ["concurrency", "synchronization"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Mutex

A mutex, a mutual exclusion, is a synchronization primitive that prevents multiple processes or threads from accessing a shared resource simultaneously. Only one holder can acquire the mutex at a time; all others must wait until it is released.

Thread-level mutexes are provided by the ``parallel`` extension. For process-level mutual exclusion, e.g., preventing concurrent cron runs, the standard approach is file-based locking with ``flock()``.

```php
<?php

    // Process-level mutex with flock()
    $lock = fopen('/tmp/my_job.lock', 'c');
    
    if (!flock($lock, LOCK_EX | LOCK_NB)) {
        // Another process already holds the lock
        fclose($lock);
        exit(0);
    }
    
    try {
        // Critical section: only one process runs this at a time
        doExpensiveWork();
    } finally {
        flock($lock, LOCK_UN);
        fclose($lock);
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Mutual_exclusion](https://en.wikipedia.org/wiki/Mutual_exclusion)

## See Also
- [flock](https://www.php.net/manual/en/function.flock.php)
- [parallel\Sync](https://www.php.net/manual/en/class.parallel-sync.php)

## Related
- [Race Condition](/features/race-condition.md)
- [Concurrency](/features/concurrency.md)
- [Thread](/features/thread.md)
- [Lock](/features/lock.md)
- [Atomic Operation](/features/atomic-operation.md)
- [Cache Stampede](/features/cache-stampede.md)
- [Semaphore](/features/sem.md)
- [Shared Memory](/features/shared-memory.md)
- [Software Transactional Memory (STM)](/features/software-transactional-memory.md)

## Details
- Extension: ext-parallel

