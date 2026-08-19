# AMP (Asynchronous Markup Protocol)
AMP refers to the AMP PHP library, formerly Amp Project, an event-driven, non-blocking I/O framework for building asynchronous applications.

It provides primitives for working with asynchronous operations: ``Promises``, ``Futures``, and an event loop. Amp is the foundation behind popular projects like ReactPHP and PHP-PM, and is widely used for building high-concurrency network services, WebSocket servers, and HTTP clients.

In a broader web context, AMP also stands for Accelerated Mobile Pages, a Google-backed project for creating fast-loading mobile web pages.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/amp.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/amp.html","name":"AMP (Asynchronous Markup Protocol)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Aug 2026 17:00:26 +0000","dateModified":"Mon, 10 Aug 2026 17:00:26 +0000","description":"AMP refers to the AMP PHP library, formerly Amp Project, an event-driven, non-blocking I\/O framework for building asynchronous applications","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/AMP (Asynchronous Markup Protocol).html"]}],"keywords":["library","async","framework","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reactphp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/async.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/asynchronous.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-loop.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coroutine.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/promise.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fibers.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-blocking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concurrency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/microservice.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/swoole.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/openswoole.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/amphp.org\/"},{"@type":"CreativeWork","name":"Amp documentation","url":"https:\/\/amphp.org\/architecture"},{"@type":"CreativeWork","name":"Amp vs ReactPHP","url":"https:\/\/amphp.org\/faq"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"amp"}]}]}</script>
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

+ [ReactPHP](reactphp.html)
+ [Async](async.html)
+ [Asynchronous](asynchronous.html)
+ [Event Loop](event-loop.html)
+ [Coroutine](coroutine.html)
+ [Promise](promise.html)
+ [Fibers](fibers.html)
+ [Non-blocking](non-blocking.html)
+ [Concurrency](concurrency.html)
+ [Microservice](microservice.html)
+ [Swoole](swoole.html)
+ [OpenSwoole](openswoole.html)

## Related packages

+ [amphp/amp](https://packagist.org/packages/amphp/amp)
