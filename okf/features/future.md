---
type: "concept"
title: "Future"
description: "A future is a programming construct representing a value that is not yet available but will be resolved at some point."
resource: "https://en.wikipedia.org/wiki/Futures_and_promises"
tags: ["concept", "design"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Future

A future is a programming construct representing a value that is not yet available but will be resolved at some point. It is closely related to promises: a future is the read-only view of an asynchronous result, while a promise is the write side that resolves or rejects that future.

In languages like Java, Scala, and Dart, futures and promises are distinct objects. With languages like PHP, the distinction is often blurred, and the terms are used interchangeably within async libraries like ReactPHP or Amp.

Futures enable non-blocking code by allowing a computation to proceed without waiting for a result that is not yet ready.

## Documentation
- [https://en.wikipedia.org/wiki/Futures_and_promises](https://en.wikipedia.org/wiki/Futures_and_promises)

## See Also
- [ReactPHP: Promise](https://reactphp.org/promise/)
- [Amp documentation](https://amphp.org/amp)
- [Fibers](https://www.php.net/manual/en/language.fibers.php)

## Related
- [Promise](/features/promise.md)
- [Asynchronous](/features/asynchronous.md)
- [Fibers](/features/fibers.md)
- [Cancellation](/features/cancellation.md)

## Details
- Packagist: [amphp/amp](https://packagist.org/packages/amphp/amp)
- Packagist: [react/promise](https://packagist.org/packages/react/promise)

