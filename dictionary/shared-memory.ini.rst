.. _shared-memory:
.. meta::
	:description:
		Shared Memory: Shared memory is a technique that allows multiple processes to access the same region of memory, enabling fast inter-process communication, IPC, without the overhead of serialization or network transfers.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Shared Memory
	:twitter:description: Shared Memory: Shared memory is a technique that allows multiple processes to access the same region of memory, enabling fast inter-process communication, IPC, without the overhead of serialization or network transfers
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Shared Memory
	:og:type: article
	:og:description: Shared memory is a technique that allows multiple processes to access the same region of memory, enabling fast inter-process communication, IPC, without the overhead of serialization or network transfers
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/shared-memory.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/shared-memory.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/shared-memory.ini.html","name":"Shared Memory","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 05:48:26 +0000","dateModified":"Tue, 14 Jul 2026 05:48:26 +0000","description":"Shared memory is a technique that allows multiple processes to access the same region of memory, enabling fast inter-process communication, IPC, without the overhead of serialization or network transfers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Shared Memory.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Shared Memory
-------------

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

.. code-block:: php
   
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


`Documentation <https://www.php.net/manual/en/shmop.examples-basic.php>`__

See also `A Guide to the PHP SHMOP Library for Shared Memory Operations <https://reintech.io/blog/a-guide-to-php-shmop-library-for-shared-memory-operations>`_.

Related : :ref:`Memory <memory>`, :ref:`Actor Model <actor-model>`, :ref:`Ownership <borrow-checking>`, :ref:`Channel <channel>`, :ref:`Memory Arena <memory-arena>`, :ref:`Software Transactional Memory (STM) <software-transactional-memory>`, :ref:`Cache <cache>`, , :ref:`Session <session>`, :ref:`Opcache <opcache>`, :ref:`Concurrency <concurrency>`, :ref:`Mutex <mutex>`, :ref:`Semaphore <semaphore>`
