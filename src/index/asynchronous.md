# Asynchronous
Asynchronous PHP, often abbreviated as ``async PHP``, refers to the capability of executing PHP code asynchronously, meaning that tasks can run concurrently without waiting for each other to complete. Traditional PHP scripts execute code synchronously, where each task must finish before the next one starts. Asynchronous PHP allows tasks to start and run independently, improving efficiency and performance, especially for tasks like handling multiple HTTP requests, database operations, or file I/O.

There are various libraries and frameworks available for implementing asynchronous PHP, such as Fiber, ReactPHP, Amp, and Swoole.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/asynchronous.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/asynchronous.html","name":"Asynchronous","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 12 Aug 2026 08:01:49 +0000","dateModified":"Wed, 12 Aug 2026 08:01:49 +0000","description":"Asynchronous PHP, often abbreviated as async PHP, refers to the capability of executing PHP code asynchronously, meaning that tasks can run concurrently without waiting for each other to complete","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Asynchronous.html"]}],"alternateName":["asynch"],"keywords":["execution","adjective"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/synchronous.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concurency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multithreading.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/promise.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/real-time.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/thread.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/async.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/blocking-wait.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cancellation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fibers.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/future.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concurrency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fire-and-forget.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/green-thread.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/request-response.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/actor-model.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/amp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/openswoole.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reactphp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/swoole.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Asynchrony_(computer_programming)"},{"@type":"CreativeWork","name":"Exploring Async PHP","url":"https:\/\/dev.to\/jackmarchant\/exploring-async-php-5b68"},{"@type":"CreativeWork","name":"Asynchronous Processing: Practices, Use Cases, and Recovery Strategies","url":"https:\/\/dariuszgafka.medium.com\/async-failure-recovery-queue-vs-streaming-channel-strategies-d038165a42dd"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"asynchronous"}]}]}</script>
```php
<?php

    function async_task($data) {
        // Simulate some asynchronous task, like fetching data from an API
        usleep(1000000); // Sleep for 1 second to mimic a time-consuming task
        return "Processed data: $data";
    }
    
    $fiber = new Fiber(function () {
        $data = "Some data to process";
        $result = async_task($data);
        Fiber::suspend($result); // Suspend the fiber and yield the result
    });
    
    // Start the fiber
    $fiber->start();
    
    // Main program can continue execution while the fiber runs asynchronously
    echo "Main program continues...\n";
    
    // Resume the fiber and get the result
    $result = $fiber->resume();
    echo "Fiber result: $result\n";

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Asynchrony_(computer_programming))**
## See Also

+ [Exploring Async PHP](https://dev.to/jackmarchant/exploring-async-php-5b68)
+ [Asynchronous Processing: Practices, Use Cases, and Recovery Strategies](https://dariuszgafka.medium.com/async-failure-recovery-queue-vs-streaming-channel-strategies-d038165a42dd)

## Related

+ [Synchronous](synchronous.html)
+ [Concurrency](concurency.html)
+ [Multithreading](multithreading.html)
+ [Promise](promise.html)
+ [Real Time](real-time.html)
+ [Thread](thread.html)
+ [Async](async.html)
+ [Blocking Wait](blocking-wait.html)
+ [Cancellation](cancellation.html)
+ [Fibers](fibers.html)
+ [Future](future.html)
+ [Concurrency](concurrency.html)
+ [Fire-and-forget](fire-and-forget.html)
+ [Green Thread](green-thread.html)
+ [Request-Response](request-response.html)
+ [Actor Model](actor-model.html)
+ [AMP (Asynchronous Markup Protocol)](amp.html)
+ [OpenSwoole](openswoole.html)
+ [ReactPHP](reactphp.html)
+ [Swoole](swoole.html)
