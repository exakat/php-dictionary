---
type: "PHP Feature"
title: "Race Condition"
description: "A Race Condition is a broad term for any situation where the outcome of a program depends on the timing of uncontrollable events."
resource: "https://en.wikipedia.org/wiki/Race_condition"
tags: ["security"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Race Condition

A Race Condition is a broad term for any situation where the outcome of a program depends on the timing of uncontrollable events.

Race conditions happen in file systems, database accesses, sessions, cache, global variables, signals. 

Race conditions may be mitigated by using atomic operations, transactions, locks and unique identifiers.

```php
<?php

    if (!file_exists('/path/to/directory')) {
        // race condition
        mkdir('/path/to/directory', 0755); // This might fail as the directory may be created between the time of the previous check and now
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Race_condition](https://en.wikipedia.org/wiki/Race_condition)

## See Also
- [PHP Race Condition Vulnerability Example](http://blog.hoangdoan.io/2015/11/php-race-condition-vulnerability-example.html)
- [PHP MySQLi - Race condition 🏁](https://github.com/wzul/PHP-MySQLi-Race-Condition)
- [Symfony Lock + Workflow: Taming the Race Condition that will hit you in production](https://nicolas-jourdan.medium.com/symfony-lock-workflow-taming-the-race-condition-that-will-hit-you-in-production-d04613e0b6a8)

## Related
- [Atomic Operation](/features/atomic-operation.md)
- [Unique Identifier](/features/unique-identifier.md)
- [Lock](/features/lock.md)
- [Transaction](/features/transaction.md)
- [Session](/features/session.md)
- [Security](/features/security.md)
- [Time Of Check To Time Of Use (TOCTOU)](/features/toctou.md)
- [Actor Model](/features/actor-model.md)
- [Cache Stampede](/features/cache-stampede.md)
- [Concurrency](/features/concurrency.md)
- [Mutex](/features/mutex.md)
- [Software Transactional Memory (STM)](/features/software-transactional-memory.md)

