# Blocking Wait
A blocking wait, or blocking call, is an operation that suspends the execution of the current process or thread until the operation completes. During a blocking wait, no other work can be done by that execution unit.

Most PHP I/O operations like file reads, database queries, HTTP requests via ``curl``... are blocking by default. The PHP process simply waits until the operation returns a result.

The alternative is non-blocking or asynchronous I/O, where execution continues and a callback or coroutine is invoked when the result is ready. Frameworks such as ReactPHP and Amp provide non-blocking event loops for PHP.

Blocking waits can become a bottleneck in high-concurrency scenarios, as each blocking call ties up a worker process.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/blocking-wait.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/blocking-wait.html","name":"Blocking Wait","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A blocking wait, or blocking call, is an operation that suspends the execution of the current process or thread until the operation completes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Blocking Wait.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Blocking: execution stops here until the HTTP response arrives
    $response = file_get_contents('https://api.example.com/data');
    
    // Blocking: waits for the sleep to complete
    sleep(2);
    
    // Non-blocking alternative using ReactPHP
    $loop = React\EventLoop\Factory::create();
    $browser = new React\Http\Browser($loop);
    $browser->get('https://api.example.com/data')->then(function ($response) {
        echo $response->getBody();
    });
    $loop->run();

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Blocking_(computing))**
## See Also

+ [Blocking vs non-blocking I/O](https://en.wikipedia.org/wiki/Asynchronous_I/O)

## Related

+ [Async](async.ini.html)
+ [Asynchronous](asynchronous.ini.html)
+ [Synchronous](synchronous.ini.html)
+ [Fibers](fibers.ini.html)
+ [Coroutine](coroutine.ini.html)
+ [Event Loop](event-loop.ini.html)
+ [Polling](polling.ini.html)

## Related packages

+ [react/event-loop](https://packagist.org/packages/react/event-loop)
+ [amphp/amp](https://packagist.org/packages/amphp/amp)
