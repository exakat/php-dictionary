---
type: "concept"
title: "Worker"
description: "A worker is a process, or thread, that consumes tasks from a queue and executes them, usually outside of the request/response cycle."
resource: "https://en.wikipedia.org/wiki/Job_queue#Worker"
tags: ["architecture", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Worker

A worker is a process, or thread, that consumes tasks from a queue and executes them, usually outside of the request/response cycle. Workers run continuously, or on demand, pulling jobs one at a time and processing them independently from the client that originally submitted the work.

Workers are the consuming side of a job queue: a producer pushes jobs onto a queue, such as ``Gearman``, ``RabbitMQ``, or ``Redis``, and one or more workers pick them up. Multiple workers may run in parallel, and can be scaled independently of the web tier, to absorb load spikes or speed up processing.

Workers are commonly implemented as long-running CLI scripts, managed by a process supervisor such as Supervisor or ``systemd``, or built on top of an event loop, as with Swoole or ReactPHP. Since PHP was originally designed for short-lived requests, long-running workers must take care to avoid memory leaks, and to reconnect resources such as database handles that may time out.

A worker that crashes, or is killed mid-job, may leave a task half-done. This is why job queues and workers are usually paired with acknowledgement, retry, and idempotency strategies.

```php
<?php

    // A minimal worker: pull jobs from a queue and process them.
    while (true) {
        $job = $queue->pop(); // blocks until a job is available

        if ($job === null) {
            continue;
        }

        try {
            processJob($job);
            $queue->acknowledge($job);
        } catch (Throwable $e) {
            $queue->retry($job);
        }
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Job_queue#Worker](https://en.wikipedia.org/wiki/Job_queue#Worker)

## See Also
- [Queues - Laravel documentation](https://laravel.com/docs/queues)
- [A Comprehensive Guide to PHP Workers: What Are They and Why You Need Them](https://www.cloudways.com/blog/php-workers/)
- [What are PHP workers?](https://www.liquidweb.com/blog/what-are-php-workers/)

## Related
- [Jobqueue](/features/jobqueue.md)
- [Queue](/features/queue.md)
- [Message Queue](/features/message-queue.md)
- [Process](/features/process.md)
- [Thread](/features/thread.md)
- [Gearman](/features/gearman.md)
- [Swoole](/features/swoole.md)
- [Retry](/features/retry.md)
- [Idempotent](/features/idempotent.md)

## Details
- Extension: ext-gearman

