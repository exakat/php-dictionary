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

## See Also

+ [ReactPHP EventLoop](https://reactphp.org/event-loop/)
+ [ReactPHP benchmarking](https://reactphp.org/#benchmarks)

Related : [AMP (Asynchronous Markup Protocol)](AMP (Asynchronous Markup Protocol)), [Async](Async), [Asynchronous](Asynchronous), [Event Loop](Event Loop), [Event Driven](Event Driven), [Coroutine](Coroutine), [Promise](Promise), [Non-blocking](Non-blocking), [Concurrency](Concurrency), [Fibers](Fibers), [Microservice](Microservice), [Swoole](Swoole), [OpenSwoole](OpenSwoole), [Websocket](Websocket), [Socket](Socket)
