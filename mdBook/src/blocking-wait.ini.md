# Blocking Wait
A blocking wait, or blocking call, is an operation that suspends the execution of the current process or thread until the operation completes. During a blocking wait, no other work can be done by that execution unit.

Most PHP I/O operations like file reads, database queries, HTTP requests via ``curl``... are blocking by default. The PHP process simply waits until the operation returns a result.

The alternative is non-blocking or asynchronous I/O, where execution continues and a callback or coroutine is invoked when the result is ready. Frameworks such as ReactPHP and Amp provide non-blocking event loops for PHP.

Blocking waits can become a bottleneck in high-concurrency scenarios, as each blocking call ties up a worker process.

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

## See Also

+ [Blocking vs non-blocking I/O](https://en.wikipedia.org/wiki/Asynchronous_I/O)

Related : [Async](Async), [Asynchronous](Asynchronous), [Synchronous](Synchronous), [Fibers](Fibers), [Coroutine](Coroutine), [Event Loop](Event Loop), [Polling](Polling)
