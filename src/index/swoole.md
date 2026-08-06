# Swoole
``Swoole`` is a PIE extension that turns PHP into an event-driven, asynchronous, coroutine-capable runtime, replacing the traditional process-per-request model with long-running server processes that handle HTTP, WebSocket, TCP, and UDP connections directly, without a separate web server such as Nginx or PHP-FPM in front.

Under Swoole, blocking calls, such as a MySQL query, a Redis command, or a file read, are automatically rewritten by the extension into non-blocking, coroutine-yielding operations, so a single worker process can serve thousands of concurrent connections without threads: while one coroutine waits on I/O, the scheduler runs another. This is the same underlying model used by ``OpenSwoole``, a community fork created after a licensing dispute; the two projects share most of their API.

Because the server process persists across requests, application state that would normally be reset on every request, such as static properties, database connections, and included files, must be deliberately managed to avoid leaking between requests, which is the main adjustment required when porting a traditional PHP application to Swoole.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/swoole.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/swoole.html","name":"Swoole","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 06:52:17 +0000","dateModified":"Tue, 04 Aug 2026 06:52:17 +0000","description":"``Swoole`` is a PIE extension that turns PHP into an event-driven, asynchronous, coroutine-capable runtime, replacing the traditional process-per-request model with long-running server processes that handle HTTP, WebSocket, TCP, and UDP connections directly, without a separate web server such as Nginx or PHP-FPM in front","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Swoole.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://wiki.swoole.com/en/)**
## See Also

+ [Asynchronous PHP Programming with Swoole](https://medium.com/@lfoster49203/asynchronous-php-programming-with-swoole-01f85b730484)

## Related

+ [OpenSwoole](openswoole.ini.html)
+ [Coroutine](coroutine.ini.html)
+ [Fibers](fibers.ini.html)
+ [Green Thread](green-thread.ini.html)
+ [Asynchronous](asynchronous.ini.html)
+ [Parallel](parallel.ini.html)
+ [AMP (Asynchronous Markup Protocol)](amp.ini.html)
+ [Gearman](gearman.ini.html)
+ [ReactPHP](reactphp.ini.html)
+ [Worker](worker.ini.html)
