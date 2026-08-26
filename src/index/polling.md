# Polling
Polling is a technique where a script repeatedly checks the status of a resource or condition at regular intervals, until a result is available or a timeout is reached.

Polling is common when waiting for asynchronous results: checking a queue, a database row, a file, or a socket. Short polling loops with a ``sleep()`` or ``usleep()`` call between iterations, while long polling holds the HTTP connection open until the server has a response.

``stream_select()`` is the native PHP primitive for polling multiple streams simultaneously without busy-waiting. For process-level polling, ``pcntl_waitpid()`` with the ``WNOHANG`` flag avoids blocking.

Polling trades simplicity for efficiency: it is easy to implement but may waste CPU cycles or impose latency. Event-driven alternatives such as ``libevent``, ReactPHP, or Swoole coroutines can replace polling when throughput matters.

Several PHP native functions include polling as a configuration: ``curl_multi_select()``, ``inotify_read()``.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polling.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polling.html","name":"Polling","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Polling is a technique where a script repeatedly checks the status of a resource or condition at regular intervals, until a result is available or a timeout is reached","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polling.html"]}],"alternateName":["long-polling","short-polling"],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sleep.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/socket.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-driven.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/blocking-wait.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/real-time.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/c10k.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/edge-triggered.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fire-and-forget.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-blocking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/one-shot.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Polling_(computer_science)"},{"@type":"CreativeWork","name":"stream_select","url":"https:\/\/www.php.net\/manual\/en\/function.stream-select.php"},{"@type":"CreativeWork","name":"pcntl_waitpid","url":"https:\/\/www.php.net\/manual\/en\/function.pcntl-waitpid.php"},{"@type":"CreativeWork","name":"The Polling API Is the Most Underrated RFC PHP Has Shipped in Years","url":"https:\/\/www.juststeveking.com\/articles\/php-8-6-polling-api-rfc\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"polling"}]}]}</script>
```php
<?php

    // Short polling: check a database flag every second
    $timeout = 30;
    $start   = time();

    while (time() - $start < $timeout) {
        $row = $pdo->query('SELECT done FROM jobs WHERE id = 1')->fetch();
        if ($row['done']) {
            echo 'Job finished.';
            break;
        }
        sleep(1);
    }

    // Stream polling with stream_select()
    $read    = [$socket];
    $write   = null;
    $except  = null;
    $changed = stream_select($read, $write, $except, seconds: 5);
    if ($changed > 0) {
        $data = fread($read[0], 1024);
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Polling_(computer_science))**
## See Also

+ [stream_select](https://www.php.net/manual/en/function.stream-select.php)
+ [pcntl_waitpid](https://www.php.net/manual/en/function.pcntl-waitpid.php)
+ [The Polling API Is the Most Underrated RFC PHP Has Shipped in Years](https://www.juststeveking.com/articles/php-8-6-polling-api-rfc/)

## Related

+ [sleep](sleep.html)
+ [Stream](stream.html)
+ [Socket](socket.html)
+ [Event Driven](event-driven.html)
+ [Blocking Wait](blocking-wait.html)
+ [Real Time](real-time.html)
+ [C10K](c10k.html)
+ [Edge Triggered](edge-triggered.html)
+ [Fire-and-forget](fire-and-forget.html)
+ [Non-blocking](non-blocking.html)
+ [One-shot](one-shot.html)
