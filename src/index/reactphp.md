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
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reactphp.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reactphp.html","name":"ReactPHP","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:28:00 +0000","dateModified":"Thu, 16 Jul 2026 14:28:00 +0000","description":"ReactPHP is a low-level library for event-driven programming","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ReactPHP.html"]}],"alternateName":["react-php"],"keywords":["library","async","framework"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/amp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/async.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/asynchronous.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-loop.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-driven.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coroutine.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/promise.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-blocking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concurrency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fibers.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/microservice.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/swoole.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/openswoole.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/websocket.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/socket.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/reactphp.org\/"},{"@type":"CreativeWork","name":"ReactPHP EventLoop","url":"https:\/\/reactphp.org\/event-loop\/"},{"@type":"CreativeWork","name":"ReactPHP benchmarking","url":"https:\/\/reactphp.org\/#benchmarks"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"reactphp"}]}]}</script>
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

+ [AMP (Asynchronous Markup Protocol)](amp.html)
+ [Async](async.html)
+ [Asynchronous](asynchronous.html)
+ [Event Loop](event-loop.html)
+ [Event Driven](event-driven.html)
+ [Coroutine](coroutine.html)
+ [Promise](promise.html)
+ [Non-blocking](non-blocking.html)
+ [Concurrency](concurrency.html)
+ [Fibers](fibers.html)
+ [Microservice](microservice.html)
+ [Swoole](swoole.html)
+ [OpenSwoole](openswoole.html)
+ [Websocket](websocket.html)
+ [Socket](socket.html)

## Related packages

+ [react/http](https://packagist.org/packages/react/http)
+ [react/event-loop](https://packagist.org/packages/react/event-loop)
+ [react/socket](https://packagist.org/packages/react/socket)
