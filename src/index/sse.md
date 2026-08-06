# Server Sent Event (SSE)
Server-Sent Events, or SSE, is a web technology that allows a server to push real-time updates to a client, often the web browser, over a single HTTP connection. Unlike WebSockets, which are bidirectional, SSE is unidirectional: the server sends data to the client, but the client cannot send data back to the server over the same connection.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sse.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sse.html","name":"Server Sent Event (SSE)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 09:03:08 +0000","dateModified":"Tue, 30 Jun 2026 09:03:08 +0000","description":"Server-Sent Events, or SSE, is a web technology that allows a server to push real-time updates to a client, often the web browser, over a single HTTP connection","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Server Sent Event (SSE).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Real-time_web)**
## See Also

+ [Simple SSE in PHP](https://lucidar.me/en/web-dev/server-sent-event-simple-php-example/)
+ [Server-Sent events with PHP and Symfony](https://minompi.medium.com/server-sent-events-with-php-and-symfony-5d6596cc84c8)

## Related

+ [Real Time](real-time.ini.html)
+ [Pub/Sub](pubsub.ini.html)
