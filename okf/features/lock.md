---
type: "concept"
title: "Lock"
description: "A lock is a mechanism used to control access to a shared resource so that only one process can use it at a time."
resource: "https://www.php.net/manual/en/function.flock.php"
tags: ["concurency", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Lock

A lock is a mechanism used to control access to a shared resource so that only one process can use it at a time.

There are different kinds of locks:

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

## Documentation
- [https://www.php.net/manual/en/function.flock.php](https://www.php.net/manual/en/function.flock.php)

## See Also
- [Data locking strategies in PHP apps. Practical approach](https://lessthan12ms.com/data-locking-strategies-in-php-apps-practical-approach.html)
- [Locking in PHP to serialize execution of critical sections](https://locallost.net/?p=1091)

## Related
- [Atomic Operation](/features/atomic-operation.md)
- [File Mode](/features/file-mode.md)
- [file_put_contents()](/features/file_put_contents.md)
- [Race Condition](/features/race-condition.md)

## Details
- Packagist: [php-lock/lock](https://packagist.org/packages/php-lock/lock)
- Extension: ext-sem

