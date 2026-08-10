# One-shot
One-shot is an I/O watcher mode where the handler fires exactly once and is automatically deregistered after the first event. Subsequent activity on the same stream does not trigger the callback until the watcher is explicitly re-added.

This avoids the need for manual cleanup and is useful for request/response patterns where a stream is expected to produce a single meaningful event: accept one connection, read one response, write one payload.

Without one-shot semantics, a persistent watcher must be explicitly removed inside its own callback to prevent it from firing again, which is error-prone under concurrent conditions.

One-shot maps to ``EPOLLONESHOT`` in the Linux ``epoll`` API. In version 8.6, the ``Io\Poll`` API exposes this behaviour through the ``Event::OneShot`` enum case, combinable with ``Event::Read`` or ``Event::Write``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/one-shot.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/one-shot.html","name":"One-shot","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 17:17:26 +0000","dateModified":"Mon, 03 Aug 2026 17:17:26 +0000","description":"One-shot is an I\/O watcher mode where the handler fires exactly once and is automatically deregistered after the first event","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/One-shot.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"One-shot"}]}]}</script>
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

**[Documentation](https://man7.org/linux/man-pages/man7/epoll.7.html)**
## See Also

+ [PHP RFC: Poll API](https://wiki.php.net/rfc/poll_api)

## Related

+ [Polling](polling.html)
+ [Event Loop](event-loop.html)
+ [Edge Triggered](edge-triggered.html)
+ [Non-blocking](non-blocking.html)
+ [Async](async.html)
