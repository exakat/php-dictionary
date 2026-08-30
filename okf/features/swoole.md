---
type: "extension"
title: "Swoole"
description: "``Swoole`` is a PIE extension that turns PHP into an event-driven, asynchronous, coroutine-capable runtime, replacing the traditional process-per-request model with long-running server processes that handle HTTP, WebSocket, TCP, and UDP connections directly, without a separate web server such as ``Nginx`` or ``PHP-FPM`` in front."
resource: "https://wiki.swoole.com/en/"
tags: ["extension", "concurrency"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Swoole

``Swoole`` is a PIE extension that turns PHP into an event-driven, asynchronous, coroutine-capable runtime, replacing the traditional process-per-request model with long-running server processes that handle HTTP, WebSocket, TCP, and UDP connections directly, without a separate web server such as ``Nginx`` or ``PHP-FPM`` in front.

Under Swoole, blocking calls, such as a MySQL query, a Redis command, or a file read, are automatically rewritten by the extension into non-blocking, coroutine-yielding operations, so a single worker process can serve thousands of concurrent connections without threads: while one coroutine waits on I/O, the scheduler runs another. This is the same underlying model used by ``OpenSwoole``, a community fork created after a licensing dispute; the two projects share most of their API.

Because the server process persists across requests, application state that would normally be reset on every request, such as static properties, database connections, and included files, must be deliberately managed to avoid leaking between requests, which is the main adjustment required when porting a traditional PHP application to Swoole.

```php
<?php

    $server = new Swoole\Http\Server('0.0.0.0', 9501);

    $server->on('request', function ($request, $response) {
        $response->header('Content-Type', 'text/plain');
        $response->end('Hello from Swoole' . PHP_EOL);
    });

    $server->start();

?>
```

## Documentation
- [https://wiki.swoole.com/en/](https://wiki.swoole.com/en/)

## See Also
- [Asynchronous PHP Programming with Swoole](https://medium.com/@lfoster49203/asynchronous-php-programming-with-swoole-01f85b730484)

## Related
- [OpenSwoole](/features/openswoole.md)
- [Coroutine](/features/coroutine.md)
- [Fibers](/features/fibers.md)
- [Green Thread](/features/green-thread.md)
- [Asynchronous](/features/asynchronous.md)
- [Parallel](/features/parallel.md)
- [AMP (Asynchronous Markup Protocol)](/features/amp.md)
- [Gearman](/features/gearman.md)
- [ReactPHP](/features/reactphp.md)
- [Worker](/features/worker.md)

## Details
- Extension: ext-swoole

