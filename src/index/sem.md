# Semaphore
A semaphore is a synchronization primitive used to control access to shared resources in concurrent systems.

Semaphores can be implemented using the sysvsem extension. They are useful for limiting access to a finite number of resources.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sem.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sem.html","name":"Semaphore","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:08:10 +0000","dateModified":"Sat, 08 Aug 2026 08:08:10 +0000","description":"A semaphore is a synchronization primitive used to control access to shared resources in concurrent systems","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Semaphore.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sem"}]}]}</script>
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
## See Also

+ [PHP Dark Arts: Semaphores](https://re-cycledair.com/php-dark-arts-semaphores)
+ [Semaphore Pattern in PHP](https://codesociety.net/patterns/concurrency/semaphore/php/)

## Related

+ [Mutex](mutex.html)
+ [Concurrency](concurrency.html)
+ [Shared Memory](shared-memory.html)
+ [Thread](thread.html)
+ [Green Thread](green-thread.html)
