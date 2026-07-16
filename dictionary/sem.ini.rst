.. _sem:
.. _semaphore:
.. meta::
	:description:
		Semaphore: A semaphore is a synchronization primitive used to control access to shared resources in concurrent systems.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Semaphore
	:twitter:description: Semaphore: A semaphore is a synchronization primitive used to control access to shared resources in concurrent systems
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Semaphore
	:og:type: article
	:og:description: A semaphore is a synchronization primitive used to control access to shared resources in concurrent systems
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sem.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/sem.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/sem.ini.html","name":"Semaphore","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:30:05 +0000","dateModified":"Thu, 16 Jul 2026 14:30:05 +0000","description":"A semaphore is a synchronization primitive used to control access to shared resources in concurrent systems","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Semaphore.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Semaphore
---------

A semaphore is a synchronization primitive used to control access to shared resources in concurrent systems.

Semaphores can be implemented using the sysvsem extension. They are useful for limiting access to a finite number of resources.

.. code-block:: php
   
   <?php
   
       // Create a semaphore
       $sem = sem_acquire(sem_get(ftok(__FILE__, 't')));
       
       // Critical section
       // ... access shared resource ...
       
       // Release the semaphore
       sem_release($sem);
   
   ?>


`Documentation <https://www.php.net/manual/en/book.sem.php>`__

Related : :ref:`Mutex <mutex>`, :ref:`Concurrency <concurrency>`, :ref:`Shared Memory <shared-memory>`, :ref:`Thread <thread>`, :ref:`Green Thread <green-thread>`
