---
type: "acronym"
title: "AMP (Asynchronous Markup Protocol)"
description: "AMP refers to the AMP PHP library, formerly Amp Project, an event-driven, non-blocking I/O framework for building asynchronous applications."
resource: "https://amphp.org/"
tags: ["library", "async", "framework", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# AMP (Asynchronous Markup Protocol)

AMP refers to the AMP PHP library, formerly Amp Project, an event-driven, non-blocking I/O framework for building asynchronous applications.

It provides primitives for working with asynchronous operations: ``Promises``, ``Futures``, and an event loop. Amp is the foundation behind popular projects like ReactPHP and PHP-PM, and is widely used for building high-concurrency network services, WebSocket servers, and HTTP clients.

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

## Documentation
- [https://amphp.org/](https://amphp.org/)

## See Also
- [Amp documentation](https://amphp.org/architecture)
- [Amp vs ReactPHP](https://amphp.org/faq)

## Related
- [ReactPHP](/features/reactphp.md)
- [Async](/features/async.md)
- [Asynchronous](/features/asynchronous.md)
- [Event Loop](/features/event-loop.md)
- [Coroutine](/features/coroutine.md)
- [Promise](/features/promise.md)
- [Fibers](/features/fibers.md)
- [Non-blocking](/features/non-blocking.md)
- [Concurrency](/features/concurrency.md)
- [Microservice](/features/microservice.md)
- [Swoole](/features/swoole.md)
- [OpenSwoole](/features/openswoole.md)

## Details
- Packagist: [amphp/amp](https://packagist.org/packages/amphp/amp)

