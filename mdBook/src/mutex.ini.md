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

## See Also

+ [flock](https://www.php.net/manual/en/function.flock.php)
+ [parallel\Sync](https://www.php.net/manual/en/class.parallel-sync.php)

Related : [Race Condition](Race Condition), [Concurrency](Concurrency), [Thread](Thread), [Lock](Lock), [Atomic Operation](Atomic Operation), [Cache Stampede](Cache Stampede), [Semaphore](Semaphore), [Shared Memory](Shared Memory), [Software Transactional Memory (STM)](Software Transactional Memory (STM))
