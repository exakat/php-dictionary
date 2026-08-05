# AMP (Asynchronous Markup Protocol)
AMP refers to the AMP PHP library, formerly Amp Project, an event-driven, non-blocking I/O framework for building asynchronous applications.

It provides primitives for working with async operations: ``Promises``, ``Futures``, and an event loop. Amp is the foundation behind popular projects like ReactPHP and PHP-PM, and is widely used for building high-concurrency network services, WebSocket servers, and HTTP clients.

In a broader web context, AMP also stands for Accelerated Mobile Pages, a Google-backed project for creating fast-loading mobile web pages.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/amp.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/amp.ini.html","name":"AMP (Asynchronous Markup Protocol)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:12:40 +0000","dateModified":"Thu, 16 Jul 2026 14:12:40 +0000","description":"AMP refers to the AMP PHP library, formerly Amp Project, an event-driven, non-blocking I\/O framework for building asynchronous applications","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/AMP (Asynchronous Markup Protocol).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://amphp.org/)**
## See Also

+ [Amp documentation](https://amphp.org/architecture)
+ [Amp vs ReactPHP](https://amphp.org/faq)

## Related

+ [ReactPHP](reactphp.ini.html)
+ [Async](async.ini.html)
+ [Asynchronous](asynchronous.ini.html)
+ [Event Loop](event-loop.ini.html)
+ [Coroutine](coroutine.ini.html)
+ [Promise](promise.ini.html)
+ [Fibers](fibers.ini.html)
+ [Non-blocking](non-blocking.ini.html)
+ [Concurrency](concurrency.ini.html)
+ [Microservice](microservice.ini.html)
+ [Swoole](swoole.ini.html)
+ [OpenSwoole](openswoole.ini.html)

## Related packages

+ [amphp/amp](https://packagist.org/packages/amphp/amp)
