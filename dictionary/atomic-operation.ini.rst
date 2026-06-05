.. _atomic-operation:
.. _atomicity:
.. meta::
	:description:
		Atomic Operation: An atomic operation is an operation that is indivisible: it either completes fully or not at all, with no intermediate state visible to other threads or processes.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Atomic Operation
	:twitter:description: Atomic Operation: An atomic operation is an operation that is indivisible: it either completes fully or not at all, with no intermediate state visible to other threads or processes
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Atomic Operation
	:og:type: article
	:og:description: An atomic operation is an operation that is indivisible: it either completes fully or not at all, with no intermediate state visible to other threads or processes
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/atomic-operation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Atomic Operation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:47:46 +0000","dateModified":"Fri, 05 Jun 2026 08:47:46 +0000","description":"An atomic operation is an operation that is indivisible: it either completes fully or not at all, with no intermediate state visible to other threads or processes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Atomic Operation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Atomic Operation
----------------

An atomic operation is an operation that is indivisible: it either completes fully or not at all, with no intermediate state visible to other threads or processes. Atomicity is one of the ACID properties of database transactions, and it is also a core concept in concurrent programming.

In PHP, which is typically single-threaded per request, atomicity concerns arise mainly in:

+ Database transactions: a set of SQL statements executed as a single atomic unit.
+ File operations: using locks to prevent partial writes.
+ Shared memory or caches (APCu, Redis): using atomic increment/decrement to avoid race conditions.

Without atomicity guarantees, concurrent access can lead to race conditions and data corruption.


.. code-block:: php
   
   <?php
   
   // Atomic database transaction
   $pdo = new PDO('sqlite::memory:');
   $pdo->beginTransaction();
   
   try {
       $pdo->exec('UPDATE accounts SET balance = balance - 100 WHERE id = 1');
       $pdo->exec('UPDATE accounts SET balance = balance + 100 WHERE id = 2');
       $pdo->commit();
   } catch (PDOException $e) {
       $pdo->rollBack();
   }
   
   // Atomic increment in APCu (shared memory)
   apcu_inc('page_views', 1, $success);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Atomicity_(database_systems)>`__

See also `Atomicity - Wikipedia <https://en.wikipedia.org/wiki/Atomicity_(database_systems)>`_.

Related : :ref:`Transaction <transaction>`, :ref:`Race Condition <race-condition>`, :ref:`Concurency <concurency>`, :ref:`Database <database>`, :ref:`Lock <lock>`, :ref:`Database Commit <database-commit>`
