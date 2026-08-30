---
type: "PHP Feature"
title: "Semaphore"
description: "A semaphore is a synchronization primitive used to control access to shared resources in concurrent systems."
resource: "https://www.php.net/manual/en/book.sem.php"
tags: ["synchronization", "concurrency"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/book.sem.php](https://www.php.net/manual/en/book.sem.php)

## See Also
- [PHP Dark Arts: Semaphores](https://re-cycledair.com/php-dark-arts-semaphores)
- [Semaphore Pattern in PHP](https://codesociety.net/patterns/concurrency/semaphore/php/)

## Related
- [Mutex](/features/mutex.md)
- [Concurrency](/features/concurrency.md)
- [Shared Memory](/features/shared-memory.md)
- [Thread](/features/thread.md)
- [Green Thread](/features/green-thread.md)

## Details
- Extension: ext-sysvsem

