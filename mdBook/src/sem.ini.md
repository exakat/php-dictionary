# Semaphore
A semaphore is a synchronization primitive used to control access to shared resources in concurrent systems.

Semaphores can be implemented using the sysvsem extension. They are useful for limiting access to a finite number of resources.
```php
<?php

    // Create a semaphore
    $sem = sem_acquire(sem_get(ftok(__FILE__, 't')));
    
    // Critical section
    // ... access shared resource ...
    
    // Release the semaphore
    sem_release($sem);

?>
```

Related : [Mutex](Mutex), [Concurrency](Concurrency), [Shared Memory](Shared Memory), [Thread](Thread), [Green Thread](Green Thread)
