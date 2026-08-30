---
type: "concept"
title: "Cancellation"
description: "Cancellation is the ability to abort an ongoing asynchronous operation before it completes."
resource: "https://amphp.org/amp"
tags: ["concept", "design"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Cancellation

Cancellation is the ability to abort an ongoing asynchronous operation before it completes. In asynchronous and concurrent programming, long-running tasks such as HTTP requests, database queries, or timers may need to be stopped early to conserve resources or respond to user actions.

Cancellation is typically implemented through cancellation tokens: an object passed to an asynchronous operation that signals cancellation on demand. The operation periodically checks the token and stops if cancellation has been requested.

PHP async libraries such as Amp provide ``CancelledException`` and cancellation token support for fibers and promises.

## Documentation
- [https://amphp.org/amp](https://amphp.org/amp)

## See Also
- [AMPHP (GitHub)](https://github.com/amphp/amp)
- [ReactPHP: Promise](https://reactphp.org/promise/)

## Related
- [Future](/features/future.md)
- [Promise](/features/promise.md)
- [Asynchronous](/features/asynchronous.md)
- [Fibers](/features/fibers.md)

## Details
- Packagist: [amphp/amp](https://packagist.org/packages/amphp/amp)

