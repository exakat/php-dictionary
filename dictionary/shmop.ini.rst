.. _shmop:
.. meta::
	:description:
		Shared Memory Operations (SHMOP): ``shmop`` is a PHP extension that gives direct, low-level access to Unix shared memory segments.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Shared Memory Operations (SHMOP)
	:twitter:description: Shared Memory Operations (SHMOP): ``shmop`` is a PHP extension that gives direct, low-level access to Unix shared memory segments
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Shared Memory Operations (SHMOP)
	:og:type: article
	:og:description: ``shmop`` is a PHP extension that gives direct, low-level access to Unix shared memory segments
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/shmop.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/shmop.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/shmop.ini.html","name":"Shared Memory Operations (SHMOP)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 09:32:12 +0000","dateModified":"Sat, 11 Jul 2026 09:32:12 +0000","description":"``shmop`` is a PHP extension that gives direct, low-level access to Unix shared memory segments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Shared Memory Operations (SHMOP).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Shared Memory Operations (SHMOP)
--------------------------------

``shmop`` is a PHP extension that gives direct, low-level access to Unix shared memory segments. It exposes a small set of functions, ``shmop_open()``, ``shmop_read()``, ``shmop_write()``, ``shmop_size()``, and ``shmop_delete()``, to allocate a block of shared memory, read from it, write to it, and release it.

Because the memory segment is identified by a system id and lives outside the memory of any single PHP process, it can be opened and shared by multiple, otherwise unrelated processes: several PHP-FPM workers, or a mix of PHP and non-PHP processes, can all attach to the same segment and see each other's writes immediately, without going through a database, a file, or a network round-trip.

``shmop`` provides no built-in locking or synchronization, so concurrent writers must coordinate themselves, typically using the ``sysvsem`` semaphore functions, to avoid corrupting the segment with interleaved writes.

.. code-block:: php
   
   <?php
   
       // adapted from the PHP manual: https://www.php.net/manual/en/shmop.examples-basic.php
       $shm_id = shmop_open(0xff3, 'c', 0644, 100);
   
       $data = 'shared payload';
       shmop_write($shm_id, $data, 0);
   
       $read = shmop_read($shm_id, 0, strlen($data));
       echo $read . PHP_EOL;
   
       shmop_delete($shm_id);
   
   ?>


`Documentation <https://www.php.net/manual/en/book.shmop.php>`__

See also `shmop basic examples <https://www.php.net/manual/en/shmop.examples-basic.php>`_.

Related : :ref:`Shared Memory <shared-memory>`, :ref:`Shared <shared>`, :ref:`Semaphore <sem>`, :ref:`Concurrency <concurrency>`
