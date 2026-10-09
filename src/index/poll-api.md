# Polling API
The Polling API is a PHP 8.6 addition that provides a single interface over the platform polling mechanisms: ``epoll`` on Linux, ``kqueue`` on BSD and macOS, event ports on Solaris and illumos, ``WSAPoll`` on Windows, and ``poll`` as a POSIX fallback. The backend is selected automatically.

The API lives in the ``Io\Poll`` namespace. It is meant to replace ``stream_select()`` in event loops and async runtimes. It provides polling only, not a full event loop.

The main classes are:

+ ``Io\Poll\Context``: holds the set of watched handles and waits for events with ``wait()``
+ ``Io\Poll\Watcher``: returned by ``Context::add()``, it reports the triggered events and can modify or remove the watch
+ ``Io\Poll\Event``: enum of ``Read``, ``Write``, ``Error``, ``HangUp``, ``ReadHangUp``, ``OneShot`` and ``EdgeTriggered``
+ ``Io\Poll\Backend``: enum of the available backends
+ ``StreamPollHandle``: wraps a PHP stream so it can be polled

User classes cannot implement ``Io\Poll\Handle``. The RFC names it as a marker interface, and sockets and curl handles are planned as future handle types.

The RFC is mainly an internal API for PHP core and extensions, for example ZTS signal handling in FrankenPHP, PHP-FPM worker events and timers. The userspace API is a secondary goal. Symfony provides a polyfill for PHP 8.1 and later.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/poll-api.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/poll-api.html","name":"Polling API","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 09 Oct 2026 17:24:29 +0000","dateModified":"Fri, 09 Oct 2026 17:24:29 +0000","description":"The Polling API is a PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/poll-api.html"]}],"alternateName":["io-poll","polling-api"],"keywords":["core"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/socket.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-driven.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-blocking.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/wiki.php.net\/rfc\/poll_API"},{"@type":"CreativeWork","name":"PHP 8.6 RFC: Polling API","url":"https:\/\/php.watch\/rfcs\/poll_api"},{"@type":"CreativeWork","name":"The Polling API Is the Most Underrated RFC PHP Has Shipped in Years","url":"https:\/\/juststeveking.com\/articles\/php-8-6-polling-api-rfc\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.38","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"poll-api"}]}]}</script>
```php
<?php
use Io\Poll\{Context, Event};

$poll   = new Context();                    // Backend::Auto
$stream = fopen('php://temp', 'r+');
$poll->add(new StreamPollHandle($stream), [Event::Read], 'tag');

foreach ($poll->wait(1) as $watcher) {      // wait up to 1 second
    if ($watcher->hasTriggered(Event::Read)) {
        echo 'Stream is readable, tag: ', $watcher->getData(), PHP_EOL;
    }
}

?>
```

**[Documentation](https://wiki.php.net/rfc/poll_API)**
## See Also

+ [PHP 8.6 RFC: Polling API](https://php.watch/rfcs/poll_api)
+ [The Polling API Is the Most Underrated RFC PHP Has Shipped in Years](https://juststeveking.com/articles/php-8-6-polling-api-rfc/)

## Related

+ [Polling](polling.html)
+ [Stream](stream.html)
+ [Socket](socket.html)
+ [Event Driven](event-driven.html)
+ [Non-blocking](non-blocking.html)
