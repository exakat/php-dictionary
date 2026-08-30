---
type: "adjective"
title: "Asynchronous"
description: "Asynchronous PHP, often abbreviated as ``async PHP``, refers to the capability of executing PHP code asynchronously, meaning that tasks can run concurrently without waiting for each other to complete."
resource: "https://en.wikipedia.org/wiki/Asynchrony_(computer_programming)"
tags: ["execution", "adjective"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Asynchronous

Asynchronous PHP, often abbreviated as ``async PHP``, refers to the capability of executing PHP code asynchronously, meaning that tasks can run concurrently without waiting for each other to complete. Traditional PHP scripts execute code synchronously, where each task must finish before the next one starts. Asynchronous PHP allows tasks to start and run independently, improving efficiency and performance, especially for tasks like handling multiple HTTP requests, database operations, or file I/O.

There are various libraries and frameworks available for implementing asynchronous PHP, such as Fiber, ReactPHP, Amp, and Swoole.

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

## Documentation
- [https://en.wikipedia.org/wiki/Asynchrony_(computer_programming)](https://en.wikipedia.org/wiki/Asynchrony_(computer_programming))

## See Also
- [Exploring Async PHP](https://dev.to/jackmarchant/exploring-async-php-5b68)
- [Asynchronous Processing: Practices, Use Cases, and Recovery Strategies](https://dariuszgafka.medium.com/async-failure-recovery-queue-vs-streaming-channel-strategies-d038165a42dd)

## Related
- [Synchronous](/features/synchronous.md)
- [Multithreading](/features/multithreading.md)
- [Promise](/features/promise.md)
- [Real Time](/features/real-time.md)
- [Thread](/features/thread.md)
- [Async](/features/async.md)
- [Blocking Wait](/features/blocking-wait.md)
- [Cancellation](/features/cancellation.md)
- [Fibers](/features/fibers.md)
- [Future](/features/future.md)
- [Concurrency](/features/concurrency.md)
- [Fire-and-forget](/features/fire-and-forget.md)
- [Green Thread](/features/green-thread.md)
- [Request-Response](/features/request-response.md)
- [Actor Model](/features/actor-model.md)
- [AMP (Asynchronous Markup Protocol)](/features/amp.md)
- [OpenSwoole](/features/openswoole.md)
- [ReactPHP](/features/reactphp.md)
- [Swoole](/features/swoole.md)

