.. _lock:
.. meta::
	:description:
		Lock: A lock is a mechanism used to control access to a shared resource so that only one process (or script) can use it at a time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Lock
	:twitter:description: Lock: A lock is a mechanism used to control access to a shared resource so that only one process (or script) can use it at a time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Lock
	:og:type: article
	:og:description: A lock is a mechanism used to control access to a shared resource so that only one process (or script) can use it at a time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/lock.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/lock.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/lock.ini.html","name":"Lock","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:54 +0000","dateModified":"Fri, 19 Jun 2026 21:24:54 +0000","description":"A lock is a mechanism used to control access to a shared resource so that only one process (or script) can use it at a time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Lock.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Lock
----

A lock is a mechanism used to control access to a shared resource so that only one process (or script) can use it at a time.

There are different kind of lock: 

+ file locks, when using flock() function
+ database locks, via transactions or explicit locks in the database
+ semaphore locks, based on sem extension.

.. code-block:: php
   
   <?php
   
   $sem = sem_get(123456);
   
   sem_acquire($sem);
   // critical section
   sem_release($sem);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.flock.php>`__

See also `Data locking strategies in PHP apps. Practical approach <https://lessthan12ms.com/data-locking-strategies-in-php-apps-practical-approach.html>`_ and `Locking in PHP to serialize execution of critical sections <https://locallost.net/?p=1091>`_.

Related : :ref:`Atomic Operation <atomic-operation>`, :ref:`File Mode <file-mode>`, :ref:`file_put_contents() <file_put_contents>`, :ref:`Race Condition <race-condition>`

Related packages : `php-lock/lock <https://packagist.org/packages/php-lock/lock>`_
