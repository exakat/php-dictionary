# Throughput
Throughput is the number of operations a system can process per unit of time. It is typically expressed as requests per second or RPS, or transactions per second or TPS. It is a primary measure of a system's capacity.

Throughput and latency are related but distinct. Latency is the time for a single operation to complete; throughput is how many operations complete per second. A system can have low latency under low load but low throughput if it cannot handle many concurrent requests. Maximising both simultaneously requires scaling horizontally, reducing blocking operations, and eliminating bottlenecks.

Throughput is limited by the PHP-FPM worker pool, since each worker handles one request at a time, database connection pools, and I/O blocking. Increasing throughput involves: adding FPM workers or servers, using a read replica to offload reads, caching expensive computations, using queues to defer work, and adopting async runtimes, like Swoole, RoadRunner, FrankenPHP, etc. that serve multiple requests per worker.

Tools for measuring PHP throughput include Apache Bench ``ab``, ``wrk``, ``k6``, and ``Blackfire``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/throughput.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/throughput.html","name":"Throughput","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:15:59 +0000","dateModified":"Mon, 06 Jul 2026 10:15:59 +0000","description":"Throughput is the number of operations a system can process per unit of time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Throughput.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"throughput"}]}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Throughput)**
## Related

+ [Latency](latency.html)
+ [Performance](performance.html)
+ [Scaling](scalability.html)
+ [FastCGI Process Manager (FPM)](fpm.html)
+ [Benchmarking](benchmarking.html)
+ [Concurrency](concurency.html)
