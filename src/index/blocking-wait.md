# Blocking Wait
A blocking wait, or blocking call, is an operation that suspends the execution of the current process or thread until the operation completes. During a blocking wait, no other work can be done by that execution unit.

Most PHP I/O operations like file reads, database queries, HTTP requests via ``curl``... are blocking by default. The PHP process simply waits until the operation returns a result.

The alternative is non-blocking or asynchronous I/O, where execution continues and a callback or coroutine is invoked when the result is ready. Frameworks such as ReactPHP and Amp provide non-blocking event loops for PHP.

Blocking waits can become a bottleneck in high-concurrency scenarios, as each blocking call ties up a worker process.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/blocking-wait.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/blocking-wait.html","name":"Blocking Wait","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A blocking wait, or blocking call, is an operation that suspends the execution of the current process or thread until the operation completes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/blocking-wait.html"]}],"alternateName":["blocking-call","synchronous-wait"],"keywords":["concept","concurrency"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/async.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/asynchronous.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/synchronous.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fibers.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coroutine.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-loop.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polling.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Blocking_(computing)"},{"@type":"CreativeWork","name":"Blocking vs non-blocking I\/O","url":"https:\/\/en.wikipedia.org\/wiki\/Asynchronous_I\/O"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"blocking-wait"}]}]}</script>
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

+ [Async](async.html)
+ [Asynchronous](asynchronous.html)
+ [Synchronous](synchronous.html)
+ [Fibers](fibers.html)
+ [Coroutine](coroutine.html)
+ [Event Loop](event-loop.html)
+ [Polling](polling.html)

## Related packages

+ [react/event-loop](https://packagist.org/packages/react/event-loop)
+ [amphp/amp](https://packagist.org/packages/amphp/amp)
