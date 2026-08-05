# Polling
Polling is a technique where a script repeatedly checks the status of a resource or condition at regular intervals, until a result is available or a timeout is reached.

Polling is common when waiting for asynchronous results: checking a queue, a database row, a file, or a socket. Short polling loops with a ``sleep()`` or ``usleep()`` call between iterations, while long polling holds the HTTP connection open until the server has a response.

``stream_select()`` is the native PHP primitive for polling multiple streams simultaneously without busy-waiting. For process-level polling, ``pcntl_waitpid()`` with the ``WNOHANG`` flag avoids blocking.

Polling trades simplicity for efficiency: it is easy to implement but may waste CPU cycles or impose latency. Event-driven alternatives such as ``libevent``, ReactPHP, or Swoole coroutines can replace polling when throughput matters.

Several PHP native functions include polling as a configuration: ``curl_multi_select()``, ``inotify_read()``.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/polling.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/polling.ini.html","name":"Polling","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 09:06:11 +0000","dateModified":"Sat, 11 Jul 2026 09:06:11 +0000","description":"Polling is a technique where a script repeatedly checks the status of a resource or condition at regular intervals, until a result is available or a timeout is reached","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Polling.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [sleep](sleep.ini.html)
+ [Stream](stream.ini.html)
+ [Socket](socket.ini.html)
+ [Event Driven](event-driven.ini.html)
+ [Blocking Wait](blocking-wait.ini.html)
+ [Real Time](real-time.ini.html)
+ [C10K](c10k.ini.html)
+ [Edge Triggered](edge-triggered.ini.html)
+ [Fire-and-forget](fire-and-forget.ini.html)
+ [Non-blocking](non-blocking.ini.html)
+ [One-shot](one-shot.ini.html)
