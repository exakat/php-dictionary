# OpenSwoole
``OpenSwoole`` is a PIE extension providing an event-driven, asynchronous, coroutine-based programming framework for PHP. It is a community fork of Swoole, created after a licensing and governance disagreement, and both projects share most of their API and internals.

OpenSwoole replaces PHP's traditional request/response, process-per-request model with a long-running server process: an HTTP, WebSocket, or TCP/UDP server that stays resident in memory, handles many connections concurrently through coroutines, and dispatches blocking calls, such as database queries or file I/O, transparently as non-blocking, cooperative tasks. This removes most of the per-request bootstrap cost, such as re-parsing configuration or re-establishing framework state, that a classic PHP-FPM request pays every time.

Because the process is long-running, code that assumes a fresh, request-scoped global state, a common assumption in traditional PHP applications, must be written carefully to avoid leaking state between requests handled by the same worker.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/openswoole.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/openswoole.html","name":"OpenSwoole","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 05:36:43 +0000","dateModified":"Tue, 14 Jul 2026 05:36:43 +0000","description":"OpenSwoole is a PIE extension providing an event-driven, asynchronous, coroutine-based programming framework for PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/openswoole.html"]}],"keywords":["extension","concurrency"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/swoole.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coroutine.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fibers.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/green-thread.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/asynchronous.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parallel.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/openswoole.com\/docs"},{"@type":"CreativeWork","name":"OpenSwoole project","url":"https:\/\/openswoole.com\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"openswoole"}]}]}</script>
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

**[Documentation](https://openswoole.com/docs)**
## See Also

+ [OpenSwoole project](https://openswoole.com/)

## Related

+ [Swoole](swoole.html)
+ [Coroutine](coroutine.html)
+ [Fibers](fibers.html)
+ [Green Thread](green-thread.html)
+ [Asynchronous](asynchronous.html)
+ [Parallel](parallel.html)

## Related packages

+ [openswoole/core](https://packagist.org/packages/openswoole/core)
