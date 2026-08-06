# Race Condition
A Race Condition is a broad term for any situation where the outcome of a program depends on the timing of uncontrollable events.

Race conditions happen in file systems, database accesses, sessions, cache, global variables, signals. 

Race conditions may be migitated by using atomic operations, transactions, locks and unique identifiers.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/race-condition.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/race-condition.html","name":"Race Condition","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 04 Jul 2026 08:14:09 +0000","dateModified":"Sat, 04 Jul 2026 08:14:09 +0000","description":"A Race Condition is a broad term for any situation where the outcome of a program depends on the timing of uncontrollable events","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Race Condition.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    if (!file_exists('/path/to/directory')) {
        // race condition
        mkdir('/path/to/directory', 0755); // This might fail as the directory may be created between the time of the previous check and now
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Race_condition)**
## See Also

+ [PHP Race Condition Vulnerability Example](http://blog.hoangdoan.io/2015/11/php-race-condition-vulnerability-example.html)
+ [PHP MySQLi - Race condition 🏁](https://github.com/wzul/PHP-MySQLi-Race-Condition)
+ [Symfony Lock + Workflow: Taming the Race Condition that will hit you in production](https://nicolas-jourdan.medium.com/symfony-lock-workflow-taming-the-race-condition-that-will-hit-you-in-production-d04613e0b6a8)

## Related

+ [Atomic Operation](atomic-operation.ini.html)
+ [Unique Identifier](unique-identifier.ini.html)
+ [Lock](lock.ini.html)
+ [Transaction](transaction.ini.html)
+ [Session](session.ini.html)
+ [Security](security.ini.html)
+ [Time Of Check To Time Of Use (TOCTOU)](toctou.ini.html)
+ [Actor Model](actor-model.ini.html)
+ [Cache Stampede](cache-stampede.ini.html)
+ [Concurrency](concurrency.ini.html)
+ [Mutex](mutex.ini.html)
+ [Software Transactional Memory (STM)](software-transactional-memory.ini.html)
