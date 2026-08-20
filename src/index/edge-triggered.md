# Edge Triggered
Edge-triggered is an I/O notification mode where the system notifies a watcher only when the stream transitions from not-ready to ready, rather than continuously while the condition holds.

This is the opposite of level-triggered mode: a level-triggered watcher fires on every poll cycle as long as data is available, while an edge-triggered watcher fires exactly once per new arrival. As a consequence, edge-triggered handlers must drain the buffer completely on each notification, or they risk never being notified about the remaining data.

Edge-triggered mode reduces spurious wake-ups and is more efficient under high throughput, but it demands careful implementation. It maps to ``EPOLLET`` in the Linux epoll API and to ``EV_CLEAR`` in BSD kqueue.

In the future version 8.6, the ``Io\Poll`` API exposes edge-triggered behaviour through the ``Event::EdgeTriggered`` enum case, which can be combined with ``Event::Read`` or ``Event::Write`` when adding a watcher to a ``Context``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/edge-triggered.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/edge-triggered.html","name":"Edge Triggered","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:33:28 +0000","dateModified":"Thu, 16 Jul 2026 14:33:28 +0000","description":"Edge-triggered is an I\/O notification mode where the system notifies a watcher only when the stream transitions from not-ready to ready, rather than continuously while the condition holds","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Edge Triggered.html"]}],"alternateName":["EPOLLET"],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-loop.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-driven.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-blocking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/one-shot.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/async.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/man7.org\/linux\/man-pages\/man7\/epoll.7.html"},{"@type":"CreativeWork","name":"PHP RFC: Poll API","url":"https:\/\/wiki.php.net\/rfc\/poll_api"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"edge-triggered"}]}]}</script>
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

+ [Polling](polling.html)
+ [Event Loop](event-loop.html)
+ [Event Driven](event-driven.html)
+ [Non-blocking](non-blocking.html)
+ [One-shot](one-shot.html)
+ [Async](async.html)
