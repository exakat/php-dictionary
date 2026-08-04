# OpenSwoole
``OpenSwoole`` is a PIE extension providing an event-driven, asynchronous, coroutine-based programming framework for PHP. It is a community fork of Swoole, created after a licensing and governance disagreement, and both projects share most of their API and internals.

OpenSwoole replaces PHP's traditional request/response, process-per-request model with a long-running server process: an HTTP, WebSocket, or TCP/UDP server that stays resident in memory, handles many connections concurrently through coroutines, and dispatches blocking calls, such as database queries or file I/O, transparently as non-blocking, cooperative tasks. This removes most of the per-request bootstrap cost, such as re-parsing configuration or re-establishing framework state, that a classic PHP-FPM request pays every time.

Because the process is long-running, code that assumes a fresh, request-scoped global state, a common assumption in traditional PHP applications, must be written carefully to avoid leaking state between requests handled by the same worker.
```php
<?php

    $server = new OpenSwoole\Http\Server('0.0.0.0', 9501);

    $server->on('request', function ($request, $response) {
        $response->header('Content-Type', 'text/plain');
        $response->end('Hello from OpenSwoole' . PHP_EOL);
    });

    $server->start();

?>
```

## See Also

+ [OpenSwoole project](https://openswoole.com/)

Related : [Swoole](Swoole), [Coroutine](Coroutine), [Fibers](Fibers), [Green Thread](Green Thread), [Asynchronous](Asynchronous), [Parallel](Parallel)
