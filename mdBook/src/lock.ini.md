# Lock
A lock is a mechanism used to control access to a shared resource so that only one process can use it at a time.

There are different kind of lock: 

+ File locks, when using ``flock()`` function
+ Database locks, via transactions or explicit locks in the database
+ Semaphore locks, based on sem extension.
```php
<?php

    $sem = sem_get(123456);
    
    sem_acquire($sem);
    // critical section
    sem_release($sem);

?>
```

## See Also

+ [Data locking strategies in PHP apps. Practical approach](https://lessthan12ms.com/data-locking-strategies-in-php-apps-practical-approach.html)
+ [Locking in PHP to serialize execution of critical sections](https://locallost.net/?p=1091)

Related : [Atomic Operation](Atomic Operation), [File Mode](File Mode), [file_put_contents()](file_put_contents()), [Race Condition](Race Condition)
