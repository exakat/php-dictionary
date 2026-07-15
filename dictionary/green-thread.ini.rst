.. _green-thread:
.. _goroutine:
.. _goroutines:
.. _green-threads:
.. meta::
	:description:
		Green Thread: Green threads, also called goroutines in Go, virtual threads in Java 21+, or lightweight threads in Erlang/Haskell, are user-space threads managed entirely by the language runtime rather than the operating system kernel.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Green Thread
	:twitter:description: Green Thread: Green threads, also called goroutines in Go, virtual threads in Java 21+, or lightweight threads in Erlang/Haskell, are user-space threads managed entirely by the language runtime rather than the operating system kernel
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Green Thread
	:og:type: article
	:og:description: Green threads, also called goroutines in Go, virtual threads in Java 21+, or lightweight threads in Erlang/Haskell, are user-space threads managed entirely by the language runtime rather than the operating system kernel
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/green-thread.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/green-thread.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/green-thread.ini.html","name":"Green Thread","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 09:18:59 +0000","dateModified":"Mon, 13 Jul 2026 09:18:59 +0000","description":"Green threads, also called goroutines in Go, virtual threads in Java 21+, or lightweight threads in Erlang\/Haskell, are user-space threads managed entirely by the language runtime rather than the operating system kernel","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Green Thread.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Green Thread
------------

Green threads, also called goroutines in Go, virtual threads in Java 21+, or lightweight threads in Erlang/Haskell, are user-space threads managed entirely by the language runtime rather than the operating system kernel. The runtime multiplexes thousands or millions of them onto a small pool of OS threads, handles scheduling, stack growth, and context switching transparently, and makes blocking calls non-blocking without programmer intervention.

Key properties of native green threads:

+ Created with negligible overhead: a few kilobytes of stack, no syscall
+ Scheduled by the runtime, not the OS; the programmer spawns them freely without thinking about thread-pool sizing.
+ Blocking I/O is intercepted by the runtime and turned into a yield; other green threads run in the meantime.
+ No explicit ``await`` or ``suspend`` call is required at the call site: existing blocking code simply works.

Go goroutines are the canonical example: ``go fn()`` spawns a goroutine and returns immediately. The Go scheduler parks it when it blocks on I/O and resumes it when the I/O completes, across a fixed number of OS threads ``GOMAXPROCS``.

PHP does not have native green threads. PHP's default execution model is shared-nothing: each request runs in its own process or OS thread, managed by PHP-FPM or the web server, with no in-process concurrency between requests.

Available approximations, each with trade-offs:

+ Fibers, PHP 8.1: cooperative micro-threads within a single OS thread. Require explicit ``Fiber::suspend()`` / ``resume()`` call sites; the programmer must opt in at every yield point. Fibers do not run in parallel and do not intercept blocking I/O automatically.
+ Swoole / OpenSwoole / Swow: C extensions that replace PHP's I/O layer and provide a coroutine scheduler. Within a Swoole coroutine server, blocking calls are transparently converted to non-blocking ones, closely approximating green-thread behaviour. However, this requires a persistent-process server model and is not part of the PHP standard distribution.
+ ReactPHP / AMPHP: pure-PHP event loops built on ``stream_select`` or ``libuv``. They require explicit async/await, ``yield`` or ``async``/``await`` via Fibers, at every I/O boundary; there is no transparent interception.
+ ``parallel`` extension: true OS threads for CPU-bound work, with strict shared-state constraints: no shared objects.

None of these match the ergonomics of goroutines, where spawning a concurrent task is a single keyword and all existing synchronous I/O code continues to work unchanged.

.. code-block:: php
   
   <?php
   
       // PHP 8.1 Fibers: closest native approximation.
       // Unlike goroutines, suspension must be explicit and there is no parallelism.
       
       $fiber = new Fiber(function (): void {
           echo "Fiber started\n";
           $received = Fiber::suspend('first yield');  // explicit yield point required
           echo "Fiber resumed with: $received\n";
       });
       
       $yielded = $fiber->start();           // run until first suspend()
       echo "Main got: $yielded\n";         // 'first yield'
       $fiber->resume('hello');              // hand control back
       
       // Swoole coroutines (extension, not standard PHP) come closer
       // to transparent green threads:
       //
       // Co\run(function () {
       //     go(function () {
       //         // Co::sleep() suspends this coroutine transparently;
       //         // other coroutines run during the wait.
       //         Co::sleep(1);
       //         echo "task A done\n";
       //     });
       //     go(function () {
       //         Co::sleep(1);
       //         echo "task B done\n";
       //     });
       // });
   
   ?>


`Documentation <https://www.php.net/manual/en/language.fibers.php>`__

See also `Go: Goroutines <https://go.dev/tour/concurrency/1>`_, `Java 21 Virtual Threads <https://openjdk.org/jeps/444>`_, `Swoole coroutines <https://wiki.swoole.com/en/#/coroutine>`_, `PHP Fibers RFC <https://wiki.php.net/rfc/fibers>`_ and `AMPHP <https://amphp.org/>`_.

Related : :ref:`Fibers <fibers>`, :ref:`Coroutine <coroutine>`, :ref:`Concurrency <concurrency>`, :ref:`Asynchronous <asynchronous>`, :ref:`Async <async>`, :ref:`Multithreading <multithreading>`, :ref:`Thread <thread>`, :ref:`Green <green>`, :ref:`OpenSwoole <openswoole>`, :ref:`Semaphore <sem>`, :ref:`Swoole <swoole>`

Related packages : `amphp/amp <https://packagist.org/packages/amphp/amp>`_, `react/event-loop <https://packagist.org/packages/react/event-loop>`_
