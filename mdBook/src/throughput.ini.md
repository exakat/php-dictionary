# Throughput
Throughput is the number of operations a system can process per unit of time. It is typically expressed as requests per second or RPS, or transactions per second or TPS. It is a primary measure of a system's capacity.

Throughput and latency are related but distinct. Latency is the time for a single operation to complete; throughput is how many operations complete per second. A system can have low latency under low load but low throughput if it cannot handle many concurrent requests. Maximising both simultaneously requires scaling horizontally, reducing blocking operations, and eliminating bottlenecks.

Throughput is limited by the PHP-FPM worker pool, since each worker handles one request at a time, database connection pools, and I/O blocking. Increasing throughput involves: adding FPM workers or servers, using a read replica to offload reads, caching expensive computations, using queues to defer work, and adopting async runtimes, like Swoole, RoadRunner, FrankenPHP, etc. that serve multiple requests per worker.

Tools for measuring PHP throughput include Apache Bench ``ab``, ``wrk``, ``k6``, and ``Blackfire``.
```php
<?php

    // PHP-FPM throughput is bounded by pm.max_children in php-fpm.conf
    // Each worker handles one request at a time (blocking model)
    // Throughput ≈ (workers × 1000) / avg_request_time_ms  requests/second
    
    // Example: 100 workers, avg response 50ms → ~2,000 RPS theoretical max
    
    // Async runtime (Swoole) removes the one-request-per-worker limit:
    $server = new Swoole\HTTP\Server('0.0.0.0', 9501);
    $server->set(['worker_num' => 4]);
    
    $server->on('request', function ($req, $res) {
        // Coroutine-based: each worker handles many concurrent requests
        Swoole\Coroutine\System::sleep(0.05); // 50ms non-blocking sleep
        $res->end('Hello!');
    });
    
    $server->start();

?>
```

Related : [Latency](Latency), [Performance](Performance), [Scaling](Scaling), [FastCGI Process Manager (FPM)](FastCGI Process Manager (FPM)), [Benchmarking](Benchmarking), [Concurrency](Concurrency)
