.. _worker:
.. meta::
	:description:
		Worker: A worker is a process, or thread, that consumes tasks from a queue and executes them, usually outside of the request/response cycle.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Worker
	:twitter:description: Worker: A worker is a process, or thread, that consumes tasks from a queue and executes them, usually outside of the request/response cycle
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Worker
	:og:type: article
	:og:description: A worker is a process, or thread, that consumes tasks from a queue and executes them, usually outside of the request/response cycle
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/worker.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/worker.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/worker.ini.html","name":"Worker","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:00:41 +0000","dateModified":"Tue, 04 Aug 2026 11:00:41 +0000","description":"A worker is a process, or thread, that consumes tasks from a queue and executes them, usually outside of the request\/response cycle","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Worker.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Worker
------

A worker is a process, or thread, that consumes tasks from a queue and executes them, usually outside of the request/response cycle. Workers run continuously, or on demand, pulling jobs one at a time and processing them independently from the client that originally submitted the work.

Workers are the consuming side of a job queue: a producer pushes jobs onto a queue, such as Gearman, RabbitMQ, or Redis, and one or more workers pick them up. Multiple workers may run in parallel, and can be scaled independently of the web tier, to absorb load spikes or speed up processing.

Workers are commonly implemented as long-running CLI scripts, managed by a process supervisor such as Supervisor or systemd, or built on top of an event loop, as with Swoole or ReactPHP. Since PHP was originally designed for short-lived requests, long-running workers must take care to avoid memory leaks, and to reconnect resources such as database handles that may time out.

A worker that crashes, or is killed mid-job, may leave a task half-done. This is why job queues and workers are usually paired with acknowledgement, retry, and idempotency strategies.

.. code-block:: php
   
   <?php
   
       // A minimal worker: pull jobs from a queue and process them.
       while (true) {
           $job = $queue->pop(); // blocks until a job is available
   
           if ($job === null) {
               continue;
           }
   
           try {
               processJob($job);
               $queue->acknowledge($job);
           } catch (Throwable $e) {
               $queue->retry($job);
           }
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Job_queue#Worker>`__

See also `Queues - Laravel documentation <https://laravel.com/docs/queues>`_, `A Comprehensive Guide to PHP Workers: What Are They and Why You Need Them <https://www.cloudways.com/blog/php-workers/>`_ and `What are PHP workers? <https://www.liquidweb.com/blog/what-are-php-workers/>`_.

Related : :ref:`Jobqueue <jobqueue>`, :ref:`Queue <queue>`, :ref:`Message Queue <message-queue>`, :ref:`Process <process>`, :ref:`Thread <thread>`, :ref:`Gearman <gearman>`, :ref:`Swoole <swoole>`, :ref:`Retry <retry>`, :ref:`Idempotent <idempotent>`
