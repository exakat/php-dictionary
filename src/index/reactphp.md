# ReactPHP
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
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/reactphp.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/reactphp.html","name":"ReactPHP","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:28:00 +0000","dateModified":"Thu, 16 Jul 2026 14:28:00 +0000","description":"ReactPHP is a low-level library for event-driven programming","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ReactPHP.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    require __DIR__ . '/vendor/autoload.php';

    $http = new React\Http\Server(function (Psr\Http\Message\ServerRequestInterface $request) {
        return React\Http\Message\Response::plaintext('Hello World!\n');
    });

    $socket = new React\Socket\SocketServer('127.0.0.1:8080');
    $http->listen($socket);

    echo "Server running at http://127.0.0.1:8080\n";

?>
```

**[Documentation](https://reactphp.org/)**
## See Also

+ [ReactPHP EventLoop](https://reactphp.org/event-loop/)
+ [ReactPHP benchmarking](https://reactphp.org/#benchmarks)

## Related

+ [AMP (Asynchronous Markup Protocol)](amp.ini.html)
+ [Async](async.ini.html)
+ [Asynchronous](asynchronous.ini.html)
+ [Event Loop](event-loop.ini.html)
+ [Event Driven](event-driven.ini.html)
+ [Coroutine](coroutine.ini.html)
+ [Promise](promise.ini.html)
+ [Non-blocking](non-blocking.ini.html)
+ [Concurrency](concurrency.ini.html)
+ [Fibers](fibers.ini.html)
+ [Microservice](microservice.ini.html)
+ [Swoole](swoole.ini.html)
+ [OpenSwoole](openswoole.ini.html)
+ [Websocket](websocket.ini.html)
+ [Socket](socket.ini.html)

## Related packages

+ [react/http](https://packagist.org/packages/react/http)
+ [react/event-loop](https://packagist.org/packages/react/event-loop)
+ [react/socket](https://packagist.org/packages/react/socket)
