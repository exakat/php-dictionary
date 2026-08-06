# Edge Triggered
Edge-triggered is an I/O notification mode where the system notifies a watcher only when the stream transitions from not-ready to ready, rather than continuously while the condition holds.

This is the opposite of level-triggered mode: a level-triggered watcher fires on every poll cycle as long as data is available, while an edge-triggered watcher fires exactly once per new arrival. As a consequence, edge-triggered handlers must drain the buffer completely on each notification, or they risk never being notified about the remaining data.

Edge-triggered mode reduces spurious wake-ups and is more efficient under high throughput, but it demands careful implementation. It maps to ``EPOLLET`` in the Linux epoll API and to ``EV_CLEAR`` in BSD kqueue.

In the future version 8.6, the ``Io\Poll`` API exposes edge-triggered behaviour through the ``Event::EdgeTriggered`` enum case, which can be combined with ``Event::Read`` or ``Event::Write`` when adding a watcher to a ``Context``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/edge-triggered.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/edge-triggered.html","name":"Edge Triggered","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:33:28 +0000","dateModified":"Thu, 16 Jul 2026 14:33:28 +0000","description":"Edge-triggered is an I\/O notification mode where the system notifies a watcher only when the stream transitions from not-ready to ready, rather than continuously while the condition holds","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Edge Triggered.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

use Io\Poll\Context;
use Io\Poll\Event;

$context = new Context();

// Notify only on state transition, not continuously
$context->add($stream, Event::Read | Event::EdgeTriggered, function ($handle) {
    // Must read until fread() returns false or empty string
    while ($chunk = fread($handle->stream, 8192)) {
        echo $chunk;
    }
});

$context->run();

?>
```

**[Documentation](https://man7.org/linux/man-pages/man7/epoll.7.html)**
## See Also

+ [PHP RFC: Poll API](https://wiki.php.net/rfc/poll_api)

## Related

+ [Polling](polling.ini.html)
+ [Event Loop](event-loop.ini.html)
+ [Event Driven](event-driven.ini.html)
+ [Non-blocking](non-blocking.ini.html)
+ [One-shot](one-shot.ini.html)
+ [Async](async.ini.html)
