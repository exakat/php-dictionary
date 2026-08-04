# Fire-and-forget
Fire-and-forget is a pattern where a task is dispatched and the caller does not wait for its result, does not check for errors, and does not expect a return value. The caller continues execution immediately after dispatching.

Common uses include sending emails, dispatching jobs to a queue, logging, analytics events, and cache invalidation: any side-effect that should not delay the main response.

In synchronous PHP, fire-and-forget is often approximated by closing the HTTP response early, ``fastcgi_finish_request()``, and continuing processing, or by pushing work onto a message queue, like Redis, RabbitMQ, SQS, etc. With fibers or async runtimes such as ReactPHP, AMPHP, Revolt, etc. true non-blocking dispatch becomes possible.

The risk of fire-and-forget is silent failure: if the dispatched task errors, the caller has no way to detect or recover from it. Robust implementations route failures to a dead-letter queue or structured log.
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

## See Also

+ [fastcgi_finish_request](https://www.php.net/manual/en/function.fastcgi-finish-request.php)

Related : [Async](Async), [Asynchronous](Asynchronous), [Event Loop](Event Loop), [Message Queue](Message Queue), [Fibers](Fibers), [Polling](Polling), [Side Effect](Side Effect)
