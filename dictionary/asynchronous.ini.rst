.. _asynchronous:
.. _asynch:
.. meta::
	:description:
		Asynchronous: Asynchronous PHP, often abbreviated as async PHP, refers to the capability of executing PHP code asynchronously, meaning that tasks can run concurrently without waiting for each other to complete.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Asynchronous
	:twitter:description: Asynchronous: Asynchronous PHP, often abbreviated as async PHP, refers to the capability of executing PHP code asynchronously, meaning that tasks can run concurrently without waiting for each other to complete
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Asynchronous
	:og:type: article
	:og:description: Asynchronous PHP, often abbreviated as async PHP, refers to the capability of executing PHP code asynchronously, meaning that tasks can run concurrently without waiting for each other to complete
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/asynchronous.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/asynchronous.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/asynchronous.ini.html","name":"Asynchronous","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:24:17 +0000","dateModified":"Tue, 14 Jul 2026 06:24:17 +0000","description":"Asynchronous PHP, often abbreviated as async PHP, refers to the capability of executing PHP code asynchronously, meaning that tasks can run concurrently without waiting for each other to complete","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Asynchronous.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Asynchronous
------------

Asynchronous PHP, often abbreviated as async PHP, refers to the capability of executing PHP code asynchronously, meaning that tasks can run concurrently without waiting for each other to complete. Traditional PHP scripts execute code synchronously, where each task must finish before the next one starts. Asynchronous PHP allows tasks to start and run independently, improving efficiency and performance, especially for tasks like handling multiple HTTP requests, database operations, or file I/O.

There are various libraries and frameworks available for implementing asynchronous PHP, such as Fiber, ReactPHP, Amp, and Swoole.

.. code-block:: php
   
   <?php
   
       function async_task($data) {
           // Simulate some asynchronous task, like fetching data from an API
           usleep(1000000); // Sleep for 1 second to mimic a time-consuming task
           return "Processed data: $data";
       }
       
       $fiber = new Fiber(function () {
           $data = "Some data to process";
           $result = async_task($data);
           Fiber::suspend($result); // Suspend the fiber and yield the result
       });
       
       // Start the fiber
       $fiber->start();
       
       // Main program can continue execution while the fiber runs asynchronously
       echo "Main program continues...\n";
       
       // Resume the fiber and get the result
       $result = $fiber->resume();
       echo "Fiber result: $result\n";
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Asynchrony_(computer_programming)>`__

See also `Exploring Async PHP <https://dev.to/jackmarchant/exploring-async-php-5b68>`_ and `Asynchronous Processing: Practices, Use Cases, and Recovery Strategies <https://dariuszgafka.medium.com/async-failure-recovery-queue-vs-streaming-channel-strategies-d038165a42dd>`_.

Related : :ref:`Synchronous <synchronous>`, :ref:`Concurrency <concurency>`, :ref:`Multithreading <multithreading>`, :ref:`Promise <promise>`, :ref:`Real Time <real-time>`, :ref:`Thread <thread>`, :ref:`Async <async>`, :ref:`Blocking Wait <blocking-wait>`, :ref:`Cancellation <cancellation>`, :ref:`Fibers <fibers>`, :ref:`Future <future>`, :ref:`Concurrency <concurrency>`, :ref:`Fire-and-forget <fire-and-forget>`, :ref:`Green Thread <green-thread>`, :ref:`Request-Response <request-response>`, :ref:`Actor Model <actor-model>`, :ref:`AMP (Asynchronous Markup Protocol) <amp>`, :ref:`OpenSwoole <openswoole>`, :ref:`ReactPHP <reactphp>`, :ref:`Swoole <swoole>`
