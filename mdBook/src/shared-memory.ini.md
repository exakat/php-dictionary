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

## See Also

+ [A Guide to the PHP SHMOP Library for Shared Memory Operations](https://reintech.io/blog/a-guide-to-php-shmop-library-for-shared-memory-operations)

Related : [Memory](Memory), [Actor Model](Actor Model), [Ownership](Ownership), [Channel](Channel), [Memory Arena](Memory Arena), [Software Transactional Memory (STM)](Software Transactional Memory (STM)), [Cache](Cache), [APCu](APCu), [Session](Session), [Opcache](Opcache), [Concurrency](Concurrency), [Mutex](Mutex), [Semaphore](Semaphore)
