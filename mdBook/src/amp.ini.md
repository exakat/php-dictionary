# AMP (Asynchronous Markup Protocol)
AMP refers to the AMP PHP library, formerly Amp Project, an event-driven, non-blocking I/O framework for building asynchronous applications.

It provides primitives for working with async operations: ``Promises``, ``Futures``, and an event loop. Amp is the foundation behind popular projects like ReactPHP and PHP-PM, and is widely used for building high-concurrency network services, WebSocket servers, and HTTP clients.

In a broader web context, AMP also stands for Accelerated Mobile Pages, a Google-backed project for creating fast-loading mobile web pages.
```php
<?php

    use Amp\Loop;
    use Amp\Promise;

    Loop::run(function () {
        $result = yield Amp\Promise\resolve('Hello from AMP!');
        echo $result;
    });

?>
```

## See Also

+ [Amp documentation](https://amphp.org/architecture)
+ [Amp vs ReactPHP](https://amphp.org/faq)

Related : [ReactPHP](ReactPHP), [Async](Async), [Asynchronous](Asynchronous), [Event Loop](Event Loop), [Coroutine](Coroutine), [Promise](Promise), [Fibers](Fibers), [Non-blocking](Non-blocking), [Concurrency](Concurrency), [Microservice](Microservice), [Swoole](Swoole), [OpenSwoole](OpenSwoole)
