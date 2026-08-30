---
type: "concept"
title: "One-shot"
description: "One-shot is an I/O watcher mode where the handler fires exactly once and is automatically deregistered after the first event."
resource: "https://man7.org/linux/man-pages/man7/epoll.7.html"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# One-shot

One-shot is an I/O watcher mode where the handler fires exactly once and is automatically deregistered after the first event. Subsequent activity on the same stream does not trigger the callback until the watcher is explicitly re-added.

This avoids the need for manual cleanup and is useful for request/response patterns where a stream is expected to produce a single meaningful event: accept one connection, read one response, write one payload.

Without one-shot semantics, a persistent watcher must be explicitly removed inside its own callback to prevent it from firing again, which is error-prone under concurrent conditions.

One-shot maps to ``EPOLLONESHOT`` in the Linux ``epoll`` API. In version 8.6, the ``Io\Poll`` API exposes this behaviour through the ``Event::OneShot`` enum case, combinable with ``Event::Read`` or ``Event::Write``.

```php
<?php

    use Io\Poll\Context;
    use Io\Poll\Event;
    
    $context = new Context();
    
    // Fires once then the watcher is removed automatically
    $context->add($stream, Event::Read | Event::OneShot, function ($handle) {
        $data = fread($handle->stream, 8192);
        echo 'Received: ' . $data;
        // No need to call $context->remove() manually
    });
    
    $context->run();

?>
```

## Documentation
- [https://man7.org/linux/man-pages/man7/epoll.7.html](https://man7.org/linux/man-pages/man7/epoll.7.html)

## See Also
- [PHP RFC: Poll API](https://wiki.php.net/rfc/poll_api)

## Related
- [Polling](/features/polling.md)
- [Event Loop](/features/event-loop.md)
- [Edge Triggered](/features/edge-triggered.md)
- [Non-blocking](/features/non-blocking.md)
- [Async](/features/async.md)

## Details
- PHP since: 8.6

