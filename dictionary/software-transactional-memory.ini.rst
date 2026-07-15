.. _software-transactional-memory:
.. _stm:
.. meta::
	:description:
		Software Transactional Memory (STM): Software Transactional Memory, or STM, introduced by Shavit and Touitou in 1995, is a concurrency control mechanism that borrows the transactional semantics from databases and applies them to in-memory operations.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Software Transactional Memory (STM)
	:twitter:description: Software Transactional Memory (STM): Software Transactional Memory, or STM, introduced by Shavit and Touitou in 1995, is a concurrency control mechanism that borrows the transactional semantics from databases and applies them to in-memory operations
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Software Transactional Memory (STM)
	:og:type: article
	:og:description: Software Transactional Memory, or STM, introduced by Shavit and Touitou in 1995, is a concurrency control mechanism that borrows the transactional semantics from databases and applies them to in-memory operations
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/software-transactional-memory.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/software-transactional-memory.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/software-transactional-memory.ini.html","name":"Software Transactional Memory (STM)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 04 Jul 2026 08:22:45 +0000","dateModified":"Sat, 04 Jul 2026 08:22:45 +0000","description":"Software Transactional Memory, or STM, introduced by Shavit and Touitou in 1995, is a concurrency control mechanism that borrows the transactional semantics from databases and applies them to in-memory operations","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Software Transactional Memory (STM).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Software Transactional Memory (STM)
-----------------------------------

Software Transactional Memory, or STM, introduced by Shavit and Touitou in 1995, is a concurrency control mechanism that borrows the transactional semantics from databases and applies them to in-memory operations. Code that reads and writes shared variables is wrapped in a transaction block. The runtime tracks every read and write optimistically (without acquiring locks). When the transaction commits, the runtime checks whether any other transaction has modified the same memory locations. If a conflict is detected the transaction is rolled back and retried transparently; otherwise all writes are applied atomically.

The key properties of an STM transaction are:

+ Atomic: all writes commit as a single unit or none of them do.
+ Consistent: invariants are preserved across the transaction boundary.
+ Isolated: concurrent transactions cannot observe each other's intermediate state.

STM avoids the deadlocks and priority inversions of explicit lock-based code, and crucially allows transactions to be composed: two independently safe transactions can be merged into a larger safe transaction without modification.

PHP's classic model, one thread per request with no shared state, makes STM largely irrelevant in traditional PHP. It becomes meaningful when using:

+ The ``parallel`` extension, which gives threads access to a ``\parallel\Channel`` and ``\parallel\Future``, allowing structured inter-thread communication that approximates transactional semantics.
+ Swoole shared-memory tables, with ``Swoole\Table``, which provide atomic row-level operations across coroutines.
+ Database-backed STM, where the database engine itself provides MVCC and serializable isolation as a proxy for in-memory STM.

.. code-block:: php
   
   <?php
   
      // Closest PHP analogue: parallel\Future as an atomic unit of work
      use parallel\{Runtime, Future};
   
      $runtime = new Runtime();
   
      // The closure runs in a separate thread; its return value is committed atomically
      $future = $runtime->run(static function (): int {
          $shared = 0;
          // read-modify-write happens inside an isolated thread
          $shared += 42;
          return $shared;
      });
   
      echo $future->value(); // 42: result committed atomically
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Software_transactional_memory>`__

See also `parallel extension <https://www.php.net/manual/en/book.parallel.php>`_, `Swoole Table <https://wiki.swoole.com/en/#/memory/table>`_ and `Composable Memory Transactions (Haskell STM paper) <https://research.microsoft.com/en-us/um/people/simonpj/papers/stm/stm.pdf>`_.

Related : :ref:`Concurrency <concurrency>`, :ref:`Atomic Operation <atomic-operation>`, :ref:`Transaction <transaction>`, :ref:`Mutex <mutex>`, :ref:`Lock <lock>`, :ref:`Shared Memory <shared-memory>`, :ref:`Race Condition <race-condition>`, :ref:`Parallel <parallel>`, :ref:`Actor Model <actor-model>`
