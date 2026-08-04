# Race Condition
A Race Condition is a broad term for any situation where the outcome of a program depends on the timing of uncontrollable events.

Race conditions happen in file systems, database accesses, sessions, cache, global variables, signals. 

Race conditions may be migitated by using atomic operations, transactions, locks and unique identifiers.
```php
<?php

    if (!file_exists('/path/to/directory')) {
        // race condition
        mkdir('/path/to/directory', 0755); // This might fail as the directory may be created between the time of the previous check and now
    }

?>
```

## See Also

+ [PHP Race Condition Vulnerability Example](http://blog.hoangdoan.io/2015/11/php-race-condition-vulnerability-example.html)
+ [PHP MySQLi - Race condition 🏁](https://github.com/wzul/PHP-MySQLi-Race-Condition)
+ [Symfony Lock + Workflow: Taming the Race Condition that will hit you in production](https://nicolas-jourdan.medium.com/symfony-lock-workflow-taming-the-race-condition-that-will-hit-you-in-production-d04613e0b6a8)

Related : [Atomic Operation](Atomic Operation), [Unique Identifier](Unique Identifier), [Lock](Lock), [Transaction](Transaction), [Session](Session), [Security](Security), [Time Of Check To Time Of Use (TOCTOU)](Time Of Check To Time Of Use (TOCTOU)), [Actor Model](Actor Model), [Cache Stampede](Cache Stampede), [Concurrency](Concurrency), [Mutex](Mutex), [Software Transactional Memory (STM)](Software Transactional Memory (STM))
