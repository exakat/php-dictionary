.. _reactphp:
.. _react-php:
.. meta::
	:description:
		ReactPHP: ReactPHP is a low-level library for event-driven programming.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ReactPHP
	:twitter:description: ReactPHP: ReactPHP is a low-level library for event-driven programming
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: ReactPHP
	:og:type: article
	:og:description: ReactPHP is a low-level library for event-driven programming
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/reactphp.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/reactphp.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/reactphp.ini.html","name":"ReactPHP","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:09:33 +0000","dateModified":"Tue, 14 Jul 2026 06:09:33 +0000","description":"ReactPHP is a low-level library for event-driven programming","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/ReactPHP.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


ReactPHP
--------

ReactPHP is a low-level library for event-driven programming. It provides an event loop, streams, promises, and other primitives for building asynchronous, non-blocking applications.

ReactPHP is built around four core components:

+ EventLoop: the core of ReactPHP, handling scheduling and dispatching of callbacks for I/O events, timers, and stream events
+ Streams: abstracted stream interfaces, ``ReadableStreamInterface``, ``WritableStreamInterface``, etc. for non-blocking I/O operations
+ Promises: a deferred/promise implementation for handling asynchronous results
+ Socket: a high-level socket server and client implementation

ReactPHP is widely used for building:

+ HTTP servers and clients
+ WebSocket servers
+ Database clients, MySQL, PostgreSQL, Redis, etc.
+ TCP/UDP servers
+ File watchers and process managers

It is the foundation for many production-grade PHP applications requiring high concurrency, such as chat servers, real-time APIs, and IoT gateways. ReactPHP 1.x requires PHP 7.1+, and the upcoming 2.0 version will leverage Fibers for simpler coroutine-like syntax.

.. code-block:: php
   
   <?php
   
       require __DIR__ . '/vendor/autoload.php';
   
       $http = new React\Http\Server(function (Psr\Http\Message\ServerRequestInterface $request) {
           return React\Http\Message\Response::plaintext('Hello World!\n');
       });
   
       $socket = new React\Socket\SocketServer('127.0.0.1:8080');
       $http->listen($socket);
   
       echo "Server running at http://127.0.0.1:8080\n";
   
   ?>


`Documentation <https://reactphp.org/>`__

See also `ReactPHP documentation <https://reactphp.org/docs>`_ and `ReactPHP benchmarking <https://reactphp.org/#benchmarks>`_.

Related : :ref:`AMP (Asynchronous Markup Protocol) <amp>`, :ref:`Async <async>`, :ref:`Asynchronous <asynchronous>`, :ref:`Event Loop <event-loop>`, :ref:`Event Driven <event-driven>`, :ref:`Coroutine <coroutine>`, :ref:`Promise <promise>`, :ref:`Non-blocking <non-blocking>`, :ref:`Concurrency <concurrency>`, :ref:`Fibers <fibers>`, :ref:`Microservice <microservice>`, :ref:`Swoole <swoole>`, :ref:`OpenSwoole <openswoole>`, :ref:`Websocket <websocket>`, :ref:`Socket <socket>`

Related packages : `react/http <https://packagist.org/packages/react/http>`_, `react/event-loop <https://packagist.org/packages/react/event-loop>`_, `react/socket <https://packagist.org/packages/react/socket>`_
