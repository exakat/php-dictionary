# Shared Memory
Shared memory is a technique that allows multiple processes to access the same region of memory, enabling fast inter-process communication, IPC, without the overhead of serialization or network transfers.

PHP provides several mechanisms for shared memory:

+ Shmop extension: low-level shared memory operations using SysV shared memory segments. Functions include ``shmop_open()``, ``shmop_read()``, ``shmop_write()``, ``shmop_close()``, and ``shmop_delete()``. Uses a key ``shm_key`` to identify segments.

+ APCu, APC User Cache: a widely-used in-memory key-value store that provides shared memory caching across requests. Functions like ``apcu_store()``, ``apcu_fetch()``, and ``apcu_delete()`` are commonly used for application-level caching.

+ ``msg_send()`` / ``msg_receive()``: message queue functions that enable structured communication between processes.

+ ``sysvsem``: system V semaphore functions for synchronization between processes accessing shared memory.

+ OPcache: while not directly a shared memory API, OPcache stores compiled PHP bytecode in shared memory, allowing all PHP processes to reuse compiled scripts.

Shared memory is essential for:

+ Session handling in load-balanced environments
+ Application-level caching, APCu
+ Inter-process communication in worker pools
+ Real-time data sharing between processes
+ Reducing database load through in-memory caching

Note that shared memory segments persist until explicitly deleted or the system is restarted, which requires careful lifecycle management.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shared-memory.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shared-memory.html","name":"Shared Memory","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 18 Aug 2026 05:31:53 +0000","dateModified":"Tue, 18 Aug 2026 05:31:53 +0000","description":"Shared memory is a technique that allows multiple processes to access the same region of memory, enabling fast inter-process communication, IPC, without the overhead of serialization or network transfers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Shared Memory.html"]}],"keywords":["architecture","concurency"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memory.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/actor-model.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/borrow-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/channel.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memory-arena.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/software-transactional-memory.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/apcu.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/session.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/opcache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concurrency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mutex.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/semaphore.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memcached.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sem.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shared.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shmop.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/shmop.examples-basic.php"},{"@type":"CreativeWork","name":"A Guide to the PHP SHMOP Library for Shared Memory Operations","url":"https:\/\/reintech.io\/blog\/a-guide-to-php-shmop-library-for-shared-memory-operations"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"shared-memory"}]}]}</script>
```php
<?php
   
    // adapted from the PHP manual : https://www.php.net/manual/en/shmop.examples-basic.php
    // Create 100 byte shared memory block with system id of 0xff3
    $shm_id = shmop_open(0xff3, 'c', 0644, 100);
    if (!$shm_id) {
        echo "Couldn't create shared memory segment\n";
    }
    
    // Lets write a test string into shared memory
    $shm_bytes_written = shmop_write($shm_id, my shared memory block, 0);
    if ($shm_bytes_written != strlen(my shared memory block)) {
        echo "Couldn't write the entire length of data\n";
    }
    
    // Now lets read the string back
    $my_string = shmop_read($shm_id, 0, $shm_size);
    if (!$my_string) {
        echo "Couldn't read from shared memory block\n";
    }
    echo "The data inside shared memory was: " . $my_string . "\n";

?>
```

**[Documentation](https://www.php.net/manual/en/shmop.examples-basic.php)**
## See Also

+ [A Guide to the PHP SHMOP Library for Shared Memory Operations](https://reintech.io/blog/a-guide-to-php-shmop-library-for-shared-memory-operations)

## Related

+ [Memory](memory.html)
+ [Actor Model](actor-model.html)
+ [Ownership](borrow-checking.html)
+ [Channel](channel.html)
+ [Memory Arena](memory-arena.html)
+ [Software Transactional Memory (STM)](software-transactional-memory.html)
+ [Cache](cache.html)
+ [APCu](apcu.html)
+ [Session](session.html)
+ [Opcache](opcache.html)
+ [Concurrency](concurrency.html)
+ [Mutex](mutex.html)
+ [Semaphore](semaphore.html)
+ [Memcached](memcached.html)
+ [Semaphore](sem.html)
+ [Shared](shared.html)
+ [Shared Memory Operations (SHMOP)](shmop.html)
