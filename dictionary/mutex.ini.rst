.. _mutex:
.. _mutual-exclusion:
.. meta::
	:description:
		Mutex: A mutex, a mutual exclusion, is a synchronization primitive that prevents multiple processes or threads from accessing a shared resource simultaneously.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Mutex
	:twitter:description: Mutex: A mutex, a mutual exclusion, is a synchronization primitive that prevents multiple processes or threads from accessing a shared resource simultaneously
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Mutex
	:og:type: article
	:og:description: A mutex, a mutual exclusion, is a synchronization primitive that prevents multiple processes or threads from accessing a shared resource simultaneously
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/mutex.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Mutex","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:35:22 +0000","dateModified":"Thu, 09 Jul 2026 08:35:22 +0000","description":"A mutex, a mutual exclusion, is a synchronization primitive that prevents multiple processes or threads from accessing a shared resource simultaneously","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Mutex.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Mutex
-----

A mutex, a mutual exclusion, is a synchronization primitive that prevents multiple processes or threads from accessing a shared resource simultaneously. Only one holder can acquire the mutex at a time; all others must wait until it is released.

Thread-level mutexes are provided by the ``parallel`` extension. For process-level mutual exclusion, e.g., preventing concurrent cron runs, the standard approach is file-based locking with ``flock()``.

.. code-block:: php
   
   <?php
   
       // Process-level mutex with flock()
       $lock = fopen('/tmp/my_job.lock', 'c');
       
       if (!flock($lock, LOCK_EX | LOCK_NB)) {
           // Another process already holds the lock
           fclose($lock);
           exit(0);
       }
       
       try {
           // Critical section: only one process runs this at a time
           doExpensiveWork();
       } finally {
           flock($lock, LOCK_UN);
           fclose($lock);
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Mutual_exclusion>`__

See also `flock <https://www.php.net/manual/en/function.flock.php>`_ and `parallel\Mutex <https://www.php.net/manual/en/class.parallel-mutex.php>`_.

Related : :ref:`Race Condition <race-condition>`, :ref:`Concurrency <concurrency>`, :ref:`Thread <thread>`, :ref:`Lock <lock>`, :ref:`Atomic Operation <atomic-operation>`
