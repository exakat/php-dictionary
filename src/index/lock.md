# Lock
A lock is a mechanism used to control access to a shared resource so that only one process can use it at a time.

There are different kind of lock: 

+ File locks, when using ``flock()`` function
+ Database locks, via transactions or explicit locks in the database
+ Semaphore locks, based on sem extension.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lock.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lock.html","name":"Lock","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 16:46:32 +0000","dateModified":"Mon, 20 Jul 2026 16:46:32 +0000","description":"A lock is a mechanism used to control access to a shared resource so that only one process can use it at a time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Lock.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"lock"}]}]}</script>
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

+ [Atomic Operation](atomic-operation.html)
+ [File Mode](file-mode.html)
+ [file\_put\_contents()](file_put_contents.html)
+ [Race Condition](race-condition.html)

## Related packages

+ [php-lock/lock](https://packagist.org/packages/php-lock/lock)
