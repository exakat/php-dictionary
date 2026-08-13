# Fire-and-forget
Fire-and-forget is a pattern where a task is dispatched and the caller does not wait for its result, does not check for errors, and does not expect a return value. The caller continues execution immediately after dispatching.

Common uses include sending emails, dispatching jobs to a queue, logging, analytics events, and cache invalidation: any side-effect that should not delay the main response.

In synchronous PHP, fire-and-forget is often approximated by closing the HTTP response early, ``fastcgi_finish_request()``, and continuing processing, or by pushing work onto a message queue, like Redis, RabbitMQ, SQS, etc. With fibers or async runtimes such as ReactPHP, AMPHP, Revolt, etc. true non-blocking dispatch becomes possible.

The risk of fire-and-forget is silent failure: if the dispatched task errors, the caller has no way to detect or recover from it. Robust implementations route failures to a dead-letter queue or structured log.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fire-and-forget.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fire-and-forget.html","name":"Fire-and-forget","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:46:22 +0000","dateModified":"Sat, 11 Jul 2026 14:46:22 +0000","description":"Fire-and-forget is a pattern where a task is dispatched and the caller does not wait for its result, does not check for errors, and does not expect a return value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Fire-and-forget.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"fire-and-forget"}]}]}</script>
```php
<?php

    // Approximated in sync PHP via fastcgi_finish_request()
    ob_start();
    echo 'Response sent to client.';
    $size = ob_get_length();
    header('Content-Length: ' . $size);
    header('Connection: close');
    ob_end_flush();
    flush();
    fastcgi_finish_request(); // client receives the response here
    
    // Work runs after the client is disconnected
    dispatch_slow_email($user);
    
    // With a queue (true fire-and-forget)
    $queue->push(new SendEmailJob($user));
    // caller does not wait — queue worker handles it asynchronously

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Fire_and_forget)**
## See Also

+ [fastcgi_finish_request](https://www.php.net/manual/en/function.fastcgi-finish-request.php)

## Related

+ [Async](async.html)
+ [Asynchronous](asynchronous.html)
+ [Event Loop](event-loop.html)
+ [Message Queue](message-queue.html)
+ [Fibers](fibers.html)
+ [Polling](polling.html)
+ [Side Effect](side-effect.html)
