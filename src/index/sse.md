# Server Sent Event (SSE)
Server-Sent Events, or SSE, is a web technology that allows a server to push real-time updates to a client, often the web browser, over a single HTTP connection. Unlike WebSockets, which are bidirectional, SSE is unidirectional: the server sends data to the client, but the client cannot send data back to the server over the same connection.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sse.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sse.html","name":"Server Sent Event (SSE)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 09:03:08 +0000","dateModified":"Tue, 30 Jun 2026 09:03:08 +0000","description":"Server-Sent Events, or SSE, is a web technology that allows a server to push real-time updates to a client, often the web browser, over a single HTTP connection","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sse.html"]}],"keywords":["acronym","architecture"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/real-time.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pubsub.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Real-time_web"},{"@type":"CreativeWork","name":"Simple SSE in PHP","url":"https:\/\/lucidar.me\/en\/web-dev\/server-sent-event-simple-php-example\/"},{"@type":"CreativeWork","name":"Server-Sent events with PHP and Symfony","url":"https:\/\/minompi.medium.com\/server-sent-events-with-php-and-symfony-5d6596cc84c8"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sse"}]}]}</script>
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

+ [Real Time](real-time.html)
+ [Pub/Sub](pubsub.html)
