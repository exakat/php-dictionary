# Semaphore
A semaphore is a synchronization primitive used to control access to shared resources in concurrent systems.

Semaphores can be implemented using the sysvsem extension. They are useful for limiting access to a finite number of resources.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sem.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sem.html","name":"Semaphore","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:30:05 +0000","dateModified":"Thu, 16 Jul 2026 14:30:05 +0000","description":"A semaphore is a synchronization primitive used to control access to shared resources in concurrent systems","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Semaphore.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/book.sem.php)**
## Related

+ [Mutex](mutex.ini.html)
+ [Concurrency](concurrency.ini.html)
+ [Shared Memory](shared-memory.ini.html)
+ [Thread](thread.ini.html)
+ [Green Thread](green-thread.ini.html)
