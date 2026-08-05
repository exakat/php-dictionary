# Mutex
A mutex, a mutual exclusion, is a synchronization primitive that prevents multiple processes or threads from accessing a shared resource simultaneously. Only one holder can acquire the mutex at a time; all others must wait until it is released.

Thread-level mutexes are provided by the ``parallel`` extension. For process-level mutual exclusion, e.g., preventing concurrent cron runs, the standard approach is file-based locking with ``flock()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/mutex.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/mutex.ini.html","name":"Mutex","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:25:07 +0000","dateModified":"Thu, 16 Jul 2026 14:25:07 +0000","description":"A mutex, a mutual exclusion, is a synchronization primitive that prevents multiple processes or threads from accessing a shared resource simultaneously","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Mutex.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Mutual_exclusion)**
## See Also

+ [flock](https://www.php.net/manual/en/function.flock.php)
+ [parallel\Sync](https://www.php.net/manual/en/class.parallel-sync.php)

## Related

+ [Race Condition](race-condition.ini.html)
+ [Concurrency](concurrency.ini.html)
+ [Thread](thread.ini.html)
+ [Lock](lock.ini.html)
+ [Atomic Operation](atomic-operation.ini.html)
+ [Cache Stampede](cache-stampede.ini.html)
+ [Semaphore](sem.ini.html)
+ [Shared Memory](shared-memory.ini.html)
+ [Software Transactional Memory (STM)](software-transactional-memory.ini.html)
