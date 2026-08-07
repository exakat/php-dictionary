# Mutex
A mutex, a mutual exclusion, is a synchronization primitive that prevents multiple processes or threads from accessing a shared resource simultaneously. Only one holder can acquire the mutex at a time; all others must wait until it is released.

Thread-level mutexes are provided by the ``parallel`` extension. For process-level mutual exclusion, e.g., preventing concurrent cron runs, the standard approach is file-based locking with ``flock()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mutex.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mutex.html","name":"Mutex","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:25:07 +0000","dateModified":"Thu, 16 Jul 2026 14:25:07 +0000","description":"A mutex, a mutual exclusion, is a synchronization primitive that prevents multiple processes or threads from accessing a shared resource simultaneously","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Mutex.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Mutex"}]}]}</script>
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

+ [Race Condition](race-condition.html)
+ [Concurrency](concurrency.html)
+ [Thread](thread.html)
+ [Lock](lock.html)
+ [Atomic Operation](atomic-operation.html)
+ [Cache Stampede](cache-stampede.html)
+ [Semaphore](sem.html)
+ [Shared Memory](shared-memory.html)
+ [Software Transactional Memory (STM)](software-transactional-memory.html)
