---
type: "extension"
title: "Gearman"
description: "``Gearman`` is a PECL extension that provides a client for the ``Gearman`` job server, a system for distributing work across machines or processes."
resource: "https://www.php.net/manual/en/book.gearman.php"
tags: ["extension", "queue"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Gearman

``Gearman`` is a PECL extension that provides a client for the ``Gearman`` job server, a system for distributing work across machines or processes. A client submits a job to the ``Gearman`` server, one or more workers register to handle jobs of that name, and the server dispatches each job to an available worker.

Jobs can be submitted synchronously, where the client blocks until a result comes back, or asynchronously, in the background, where the client fires the job and moves on. ``Gearman`` also supports splitting a large task into pieces that are farmed out to multiple workers and their results merged, and it can report progress back to the client for long-running jobs.

``Gearman`` is commonly used to offload slow operations, such as image processing, sending email, or generating reports, out of the request/response cycle and onto a pool of background workers, which can be scaled independently of the web tier.

```php
<?php

    // Worker process: registers a function and waits for jobs.
    $worker = new GearmanWorker();
    $worker->addServer();
    $worker->addFunction('resize_image', function (GearmanJob $job) {
        $path = $job->workload();
        // ... resize $path ...
        return 'done';
    });
    while ($worker->work()) {
    }

    // Client process: submits a job and waits for the result.
    $client = new GearmanClient();
    $client->addServer();
    $result = $client->doNormal('resize_image', '/uploads/photo.jpg');

?>
```

## Documentation
- [https://www.php.net/manual/en/book.gearman.php](https://www.php.net/manual/en/book.gearman.php)

## See Also
- [Gearman project](http://gearman.org/)

## Related
- [Queue](/features/queue.md)
- [RdKafka](/features/rdkafka.md)
- [Swoole](/features/swoole.md)
- [Distributed Systems](/features/distributed-systems.md)

## Details
- Extension: ext-gearman

