# Lock
A lock is a mechanism used to control access to a shared resource so that only one process can use it at a time.

There are different kind of lock: 

+ File locks, when using ``flock()`` function
+ Database locks, via transactions or explicit locks in the database
+ Semaphore locks, based on sem extension.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/lock.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/lock.html","name":"Lock","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 16:46:32 +0000","dateModified":"Mon, 20 Jul 2026 16:46:32 +0000","description":"A lock is a mechanism used to control access to a shared resource so that only one process can use it at a time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Lock.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $sem = sem_get(123456);
    
    sem_acquire($sem);
    // critical section
    sem_release($sem);

?>
```

**[Documentation](https://www.php.net/manual/en/function.flock.php)**
## See Also

+ [Data locking strategies in PHP apps. Practical approach](https://lessthan12ms.com/data-locking-strategies-in-php-apps-practical-approach.html)
+ [Locking in PHP to serialize execution of critical sections](https://locallost.net/?p=1091)

## Related

+ [Atomic Operation](atomic-operation.ini.html)
+ [File Mode](file-mode.ini.html)
+ [file\_put\_contents()](file_put_contents.ini.html)
+ [Race Condition](race-condition.ini.html)

## Related packages

+ [php-lock/lock](https://packagist.org/packages/php-lock/lock)
