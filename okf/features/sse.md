---
type: "acronym"
title: "Server Sent Event (SSE)"
description: "Server-Sent Events, or SSE, is a web technology that allows a server to push real-time updates to a client, often the web browser, over a single HTTP connection."
resource: "https://en.wikipedia.org/wiki/Real-time_web"
tags: ["acronym", "architecture"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Server Sent Event (SSE)

Server-Sent Events, or SSE, is a web technology that allows a server to push real-time updates to a client, often the web browser, over a single HTTP connection. Unlike WebSockets, which are bidirectional, SSE is unidirectional: the server sends data to the client, but the client cannot send data back to the server over the same connection.

```php
<?php

    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');
    header('Connection: keep-alive');
    
    // Send updates
    while (true) {
        $data = getLiveData(); // Fetch or generate data
        echo "data: {$data}\n\n";
        flush(); // Send output to the client immediately
        sleep(1); // Wait before sending the next update
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Real-time_web](https://en.wikipedia.org/wiki/Real-time_web)

## See Also
- [Simple SSE in PHP](https://lucidar.me/en/web-dev/server-sent-event-simple-php-example/)
- [Server-Sent events with PHP and Symfony](https://minompi.medium.com/server-sent-events-with-php-and-symfony-5d6596cc84c8)

## Related
- [Real Time](/features/real-time.md)
- [Pub/Sub](/features/pubsub.md)

