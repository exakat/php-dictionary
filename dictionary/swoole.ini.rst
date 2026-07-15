.. _swoole:
.. meta::
	:description:
		Swoole: ``Swoole`` is a PIE extension that turns PHP into an event-driven, asynchronous, coroutine-capable runtime, replacing the traditional process-per-request model with long-running server processes that handle HTTP, WebSocket, TCP, and UDP connections directly, without a separate web server such as Nginx or PHP-FPM in front.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Swoole
	:twitter:description: Swoole: ``Swoole`` is a PIE extension that turns PHP into an event-driven, asynchronous, coroutine-capable runtime, replacing the traditional process-per-request model with long-running server processes that handle HTTP, WebSocket, TCP, and UDP connections directly, without a separate web server such as Nginx or PHP-FPM in front
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Swoole
	:og:type: article
	:og:description: ``Swoole`` is a PIE extension that turns PHP into an event-driven, asynchronous, coroutine-capable runtime, replacing the traditional process-per-request model with long-running server processes that handle HTTP, WebSocket, TCP, and UDP connections directly, without a separate web server such as Nginx or PHP-FPM in front
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/swoole.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/swoole.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/swoole.ini.html","name":"Swoole","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:43:34 +0000","dateModified":"Mon, 13 Jul 2026 18:43:34 +0000","description":"``Swoole`` is a PIE extension that turns PHP into an event-driven, asynchronous, coroutine-capable runtime, replacing the traditional process-per-request model with long-running server processes that handle HTTP, WebSocket, TCP, and UDP connections directly, without a separate web server such as Nginx or PHP-FPM in front","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Swoole.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Swoole
------

``Swoole`` is a PIE extension that turns PHP into an event-driven, asynchronous, coroutine-capable runtime, replacing the traditional process-per-request model with long-running server processes that handle HTTP, WebSocket, TCP, and UDP connections directly, without a separate web server such as Nginx or PHP-FPM in front.

Under Swoole, blocking calls, such as a MySQL query, a Redis command, or a file read, are automatically rewritten by the extension into non-blocking, coroutine-yielding operations, so a single worker process can serve thousands of concurrent connections without threads: while one coroutine waits on I/O, the scheduler runs another. This is the same underlying model used by ``OpenSwoole``, a community fork created after a licensing dispute; the two projects share most of their API.

Because the server process persists across requests, application state that would normally be reset on every request, such as static properties, database connections, and included files, must be deliberately managed to avoid leaking between requests, which is the main adjustment required when porting a traditional PHP application to Swoole.

.. code-block:: php
   
   <?php
   
       $server = new Swoole\Http\Server('0.0.0.0', 9501);
   
       $server->on('request', function ($request, $response) {
           $response->header('Content-Type', 'text/plain');
           $response->end('Hello from Swoole' . PHP_EOL);
       });
   
       $server->start();
   
   ?>


`Documentation <https://wiki.swoole.com/en/>`__

See also `Asynchronous PHP Programming with Swoole <https://medium.com/@lfoster49203/asynchronous-php-programming-with-swoole-01f85b730484>`_.

Related : :ref:`OpenSwoole <openswoole>`, :ref:`Coroutine <coroutine>`, :ref:`Fibers <fibers>`, :ref:`Green Thread <green-thread>`, :ref:`Asynchronous <asynchronous>`, :ref:`Parallel <parallel>`
