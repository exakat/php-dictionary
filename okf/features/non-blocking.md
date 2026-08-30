---
type: "concept"
title: "Non-blocking"
description: "Non-blocking I/O is a mode where read and write operations return immediately, even if no data is available or the buffer is full, instead of suspending execution until the operation can complete."
resource: "https://www.php.net/manual/en/function.stream-set-blocking.php"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Non-blocking

Non-blocking I/O is a mode where read and write operations return immediately, even if no data is available or the buffer is full, instead of suspending execution until the operation can complete.

``stream_set_blocking($stream, false)`` switches a stream to non-blocking mode. A subsequent ``fread()`` returns an empty string rather than waiting, and ``fwrite()`` may write fewer bytes than requested. The caller is responsible for retrying.

Non-blocking I/O is a prerequisite for multiplexing multiple streams efficiently. ``stream_select()`` and the PHP 8.6 ``Io\Poll`` API both require streams to be in non-blocking mode: they watch which streams are ready, then hand control to the caller who reads/writes without risk of blocking.

The alternative is blocking I/O, the default, where each operation parks the process until completion. Blocking is simpler but limits a single process to one active stream at a time.

```php
<?php

    $server = stream_socket_server('tcp://0.0.0.0:8080');
    stream_set_blocking($server, false); // non-blocking accept
    
    $client = stream_socket_client('tcp://example.com:80');
    stream_set_blocking($client, false); // non-blocking read/write
    
    fwrite($client, "GET / HTTP/1.0\r\nHost: example.com\r\n\r\n");
    
    // stream_select() waits until $client is readable, then fread() returns immediately
    $read = [$client];
    $write = $except = null;
    if (stream_select($read, $write, $except, 5) > 0) {
        echo fread($client, 8192);
    }
    
    // PHP 8.6: Io\Poll requires non-blocking streams
    use Io\Poll\Context;
    use Io\Poll\Event;
    
    $context = new Context();
    $context->add($client, Event::Read, fn($h) => echo fread($h->stream, 8192));
    $context->run();

?>
```

## Documentation
- [https://www.php.net/manual/en/function.stream-set-blocking.php](https://www.php.net/manual/en/function.stream-set-blocking.php)

## See Also
- [stream_select](https://www.php.net/manual/en/function.stream-select.php)
- [PHP RFC: Poll API](https://wiki.php.net/rfc/poll_api)

## Related
- [Blocking Wait](/features/blocking-wait.md)
- [Polling](/features/polling.md)
- [Event Loop](/features/event-loop.md)
- [Stream](/features/stream.md)
- [Socket](/features/socket.md)
- [Async](/features/async.md)
- [Edge Triggered](/features/edge-triggered.md)
- [One-shot](/features/one-shot.md)
- [AMP (Asynchronous Markup Protocol)](/features/amp.md)
- [C10K](/features/c10k.md)
- [ReactPHP](/features/reactphp.md)

